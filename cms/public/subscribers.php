<?php 
	include '../admin/controller/databaseconnect.php';
	include '../admin/controller/siteconfiguration.php';
	global $conn;
	global $sitepath;

	if (isset($_POST['submit'])) {
		$email= $_POST['email'];

		if($_POST['email']== ""){
			echo "PLEASE ENTER YOUR EMAIL";
          	echo "<script>setTimeout(\"location.href = '$sitepath/newsletter-subscriber';\",1500);</script>";
		}else{
			$subs_query="INSERT INTO subscribers (`email`) VALUES ('$email')";
			$subs_result=mysqli_query($conn,$subs_query);
			header("Location: $sitepath");
			exit();
		}
	}	
?>