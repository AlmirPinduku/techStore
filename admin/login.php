<?php
session_start();
?>

<?php
$con=mysqli_connect("localhost","root","","projekti");
mysqli_select_db($con,"projekti");

if(isset($_POST['login'])){
	$user_name = $_POST['user_name'];
	$password =$_POST['password'];
	
	$encrypt = md5($password);
	
	$admin_query = "select * from admin_login where user_name='$user_name'
	AND password='$password'";
	
	$run = mysqli_query($con, $admin_query);
	
	if(mysqli_num_rows($run)>0){
	
	$_SESSION['user_name']=$user_name;
	
	echo "<script>window.open('index.php','_self')</script>";
	}
	else {
	
	echo "<script>alert('User_name ose password eshte gabim')</script>";
	}		
}

?>

<html>
	<head>
		<title>Logini per Admin</title>
		<link rel="stylesheet" href="../input.css">
	</head>
<body>
	<div class="form-container">
	<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
			<form method="post" action="login.php">
									<h3>login <br>Shopping Online Admin</h3>
				<input type="text" name="user_name" required placeholder="enter your username">
				<input type="password" name="password" required placeholder="enter your password">
				<input type="submit" name="login" value="Login" class="form-btn">
				<!-- <p>don't have an account? <a href="register_form.php">register now</a></p> -->
			</form>
	</div>


</body>
</html>