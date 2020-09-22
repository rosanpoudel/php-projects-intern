<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header ("Location:../index.php");
		exit();
	}
?>

<?php 
	include "header.php"; 
	include "../controller/databaseconnect.php";
	global $conn;
	global $sitepath;

	$sql="SELECT * FROM pages";
	$result=mysqli_query($conn,$sql);
 ?>

	<title>add new image</title>

	<form class="form editpg" action="<?php echo $sitepath ?>/admin/controller/add-new-image.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="title" placeholder="IMAGE TITLE" required="required"><br><br>
		<input type="text" name="description" placeholder="IMAGE DESCRIPTION" required="required"><br><br>


	  	Select Page:<br><select name="select-page">
			    <?php
			      while ($row = $result->fetch_assoc()) 
			      {
			      	echo '<option></option>';
			        echo '<option value=" '.$row['id'].' "> '.$row['title'].' </option>';
			      }

			    ?>
	    </select><br><br>
	    
		<input type="file" name="uploadfile" required="required"><br><br>

		<input type="submit" name="submit" value="upload">

	</form>

<?php include("footer.php") ?>