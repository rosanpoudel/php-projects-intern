<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("Location:../index.php");
			exit();
		}
	?>

	<?php 
		include ("header.php");
 	?>
	<title>Images</title>

	<div class="content">
		
	</div>


