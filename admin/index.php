<?php
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 

if(!isset($_SESSION['user_name'])){

header("location: login.php");	
}
else{

?>

<html>
	<head>
		<title>Faqja per Admin</title>
		<link rel="stylesheet" href="../styles.css">
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	</head>
	
<body>
<?php 	include("adminnav.php");?>
<h1 class="text-2xl z-10 bg-black text-white p-8">Mirservini ne faqen tuaj - <span class="bg-red-700 text-white px-6 py-0.5 uppercase"><?php echo $_SESSION['user_name']; ?></span>

		<div class=" font-bold text-8xl bg-yellow-500 p-2 flex justify-center items-center w-full h-screen">
			<h1 class="bg-black p-6 text-yellow-500 -rotate-12">Coming Soon</h1>
		</div>
</div>
<?php
	


?>

</body>
</html>

<?php } ?>