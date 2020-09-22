<!DOCTYPE html>
<html>
<head>
	<?php 
	global $sitepath;
	include ('../controller/databaseconnect.php');
	include ('../controller/siteconfiguration.php');
?>
	<title>forget password</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/style.css">

</head>
<body>
	<h1 align="center">Please Enter Your E-mail to Retrive Your Password</h1>
	<form class="form" action="<?php echo $sitepath ?>/admin/controller/forget-password.php" method="POST">
		E-mail:  <input type="email" name="email" placeholder="email id"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>