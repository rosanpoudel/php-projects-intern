	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("Location:../index.php");
			exit();
		}

		include("header.php"); 

		$sql="SELECT * FROM slides";
		$result=mysqli_query($conn,$sql);
	?>

	<title>add slider</title>

	<div class="content editpg">
		<form action="<?php echo $sitepath; ?>/admin/controller/add-new-slider.php" method="POST" enctype="multipart/form-data">
			<label>Title :</label><br>
			<input type="text" name="title" required="required" ><br><br>

			<label>Description :</label><br>
			<input type="text" name="description" required="required"><br><br>

			<label>Image :</label><br>
			<input type="file" name="uploadfile[]"  multiple="multiple" required="required"><br><br>

			<input type="submit" name="submit">
		</form>
	</div>
	
<?php include ("footer.php") ?>
