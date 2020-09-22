<?php 
global $sitepath;
include ('../controller/siteconfiguration.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user registration</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/cms/admin/static/css/style.css">

</head>
<body>
	<div class="registration">
		<h1>User Registration</h1>
		<form action="<?php echo $sitepath ?>/admin/controller/registration.php" method="POST">
			First-Name :  <input type="text" name="fname" placeholder="First Name"><br><br>
			Last-Name  : <input type="text" name="lname" placeholder="Last Name"><br><br>
			E-mail  : <input type="email" name="email" placeholder="E-mail"><br><br>
			Password  : <input type="password" name="password" placeholder="Password"><br><br>
			Confirm Password  : <input type="password" name="confirm-password" placeholder="confirm-Password"><br><br>
			<input type="submit" name="submit">
			<a class="reg" href="<?php echo $sitepath ?>/admin/index.php">login</a>
		</form>
	</div>

</body>
</html>