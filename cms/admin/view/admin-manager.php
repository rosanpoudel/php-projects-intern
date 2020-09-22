
<?php 
	session_start();
	if($_SESSION["email"]==true){
		// echo"welcome  " . $_SESSION["email"];
	}else{
		header("../index.php");
		exit();
	}
?>


	<?php 
		include("header.php");
	 ?>

	<title>admin manager</title>



	<div class="change">
		<a class="" href="<?php echo $sitepath ?>/admin/view/user-table.php">Change  email & Password</a>
	</div>

	<div class="content">
		
	</div>
<?php include("footer.php") ?>
