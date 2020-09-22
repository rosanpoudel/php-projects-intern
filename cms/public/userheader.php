	
<?php 	 	
	include '../admin/controller/databaseconnect.php';
	include '../admin/controller/siteconfiguration.php';
	global$conn;
	global $sitepath;
	$sqll="SELECT * FROM Configuration";
	$resultcheck=mysqli_query($conn,$sqll);
	$roww=mysqli_fetch_array($resultcheck);
	$logo=$roww['logo'];
	$sitename=$roww['siteName'];
	$siteurl=$roww['siteURL'];
	$sitepath=$roww['sitePath'];
	$footertext=$roww['footerText'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $sitepath ?>/admin/static/prettyphoto/css/prettyPhoto.css">
</head>
<body>
	
	
<?php include 'nav.php' ?>
	



	