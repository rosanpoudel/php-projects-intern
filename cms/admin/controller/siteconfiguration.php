<?php
	include 'databaseconnect.php';
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