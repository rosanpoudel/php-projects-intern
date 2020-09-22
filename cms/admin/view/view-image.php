
	<?php 
		session_start();
		if($_SESSION["email"]==true){
			// echo"welcome  " . $_SESSION["email"];
		}else{
			header("../index.php");
			exit();
		}

		include "../controller/databaseconnect.php";
		include("header.php");
		global $conn;
		$sql="SELECT `image` FROM images where page_id=". $_GET['view_id'];
		$result=mysqli_query($conn, $sql);
		
	?>


	<title>view image</title>


	
	<div>
		<a class="addpage gallary" href="<?php echo $sitepath ?>/admin/view/add-image.php">Add image</a>		
	</div>

	<div class="image-gallary content">
		<?php 
			while($row=mysqli_fetch_assoc($result)){
				$image = $row['image']; 
				echo "<img  src='" . "$sitepath/admin/uploads/" . $image . "'  />";
			}
		 ?>		
	</div>
<?php include ("footer.php") ?>
