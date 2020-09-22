<?php 
	session_start();
	if($_SESSION["email"]==true){
	}else{
		header("Location:../index.php");
		exit();
	}

	include "../controller/databaseconnect.php";
	global $conn;
	include("header.php"); 
?>


	
<title>Add posts</title>

<div class="content editpg">
	<form action="<?php echo $sitepath; ?>/admin/controller/add-new-post.php" method="POST" enctype="multipart/form-data">

		<label>Title :</label><br>
		<input type="text" name="title" required="required"><br><br>

		<label>Content :</label><br>
		<input type="text" name="content" required="required"><br><br>

		<label>seo title :</label><br>
		<input type="text" name="seo-title" required="required"><br><br>

		<label>meta title :</label><br>
		<input type="text" name="meta-title" required="required"><br><br>

		<label>meta keyword :</label><br>
		<input type="text" name="meta-keyword" required="required"><br><br>

		<label>added date :</label><br>
		<input type="date" name="date" required="required"><br><br>

		<label>Image</label><br>
		<input type="file" name="uploadfile[]" required="required" multiple="multiple"><br><br>

		<input type="submit" name="submit">
	</form>
</div>	

<?php include ("footer.php") ?>
