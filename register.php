<?php 
 if (empty($_POST) === false) {
	 $required_fields = array('username','password','password_again','first_name','email');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
		}
	}
	
	if (empty($errors) === true) {
		if (user_exists($_POST['username']) === true) {
			$error[] = 'Me vjen keq, ky username \'' . $_POST['username'] . '\' tashme eshte i regjistruar';
		}
		if (preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Passwordi juaj  duhet te kete nje hapsire.';
		}
		if (strlen($_POST['password']) < 6) {
			$errors[] = 'Passwordi juaj duhet te kete me shume se 6 karaktere';
		}
		if ($_POST['password'] !== $_POST['password_again']) {
			$errors[] = 'Passwordi juaj nuk perputhet';
		}
		if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Email adresa jauj eshte kerkuar';
		}
		if (email_exists($_POST['email']) === true) {
			$errors[] = 'Me vjen keq, ky email \'' . $_POST['email'] . '\' tashme eshte i regjistruAR';
		}
	}
 }	
 
?>
<h1>Register</h1>

<form action="" method="post">
	<ul>
		<li>
			Username*:<br>
			<input type="text" name="username">
		</li>
		<li>
			Password*:<br>
			<input type="password" name="password">	
		</li>
		<li>
			Password again*:<br>
			<input type="password" name="password_again">	
		</li>
		<li>
			First name*:<br>
			<input type="text" name="first_name">
		</li>
		<li>
			Last name*:<br>
			<input type="text" name="last_name">
		</li>
		<li>
			Email*:<br>
			<input type="text" name="email">
		</li>
		<li>
			<input type="submit" value="Register">
		</li>
	</ul>
</form>


