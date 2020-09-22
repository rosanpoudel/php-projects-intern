<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header("../index.php");
		exit();
	}

	include("header.php");
	include '../controller/databaseconnect.php';
	global $conn;

	if(isset($_GET['edit_id'])){
		$edit_id=$_GET['edit_id'];
		$edit_query="SELECT * FROM slides WHERE id=$edit_id";
		$edit_result=mysqli_query($conn,$edit_query);
		$fetchresult=mysqli_fetch_array($edit_result);
	}

	if(isset($_POST['submit'])){
		$edit_id=$_GET['edit_id'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$query="UPDATE slides SET title='$title', description='$description' WHERE id= $edit_id";
		$updatequery=mysqli_query($conn,$query);
		header("Location:slider-manager.php");
	}
?>


<title>edit slider</title>

<div class="content editpg">
	<form action="<?php echo $sitepath ?>/admin/view/edit-slider.php?edit_id=<?php echo $edit_id;?>&&submit=true"  method="POST" enctype="multipart/form-data">
		<label>Title :</label><br>
		<input type="text" name="title" value="<?php echo $fetchresult['title']; ?>" ><br><br>

		<label>Description :</label><br>
		<input type="text" name="description" value="<?php echo $fetchresult['description']; ?>"><br><br>

		<input type="submit" name="submit">
	</form>
</div>

