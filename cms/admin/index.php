<?php 
global $sitepath;
include './controller/databaseconnect.php';
include './controller/siteconfiguration.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>first login page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/style.css">
</head>
<body class="clearfix">

	<div class="login container">
		<h1>Login Form</h1>
		<form action="<?php echo $sitepath ?>/admin/controller/login.php" method="POST" name="frm" id="formm">

			E-mail  :<br> <input type="email" name="email" placeholder="username or email" value='<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>'><br><br>

			Password  :<br> <input type="password" name="password" placeholder="Password" value='<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>'><br><br>

			<input type="submit" name="submit" id="submt" value="Login"><br><br>

			<input  type="checkbox" name="remember-me" <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?>>Remember me.	

			<a class="sign-up" href="<?php echo $sitepath ?>/admin/view/registration-form.php">Sign Up</a>

			<a class="sign-up" href="<?php echo $sitepath ?>/admin/view/forgetpassword.php" target="_blank">Forgot Password</a>

		</form>
	</div>
	
</body>
</html>


