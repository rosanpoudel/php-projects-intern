	
	<?php 
		session_start();
		if($_SESSION["email"]==true){
		}else{
			header("../index.php");
			exit();
		}


		include "../controller/databaseconnect.php";
		global $conn;
		

		//getting id from the database
		if(isset($_GET['edit_id'])){
			$sql="SELECT * FROM pages WHERE id=" . $_GET['edit_id'];
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result);
		}

		//update information
		if(isset($_GET['update'])){
			$title=$_POST['title'];
			$content=$_POST['content'];
			$description=$_POST['description'];
			$edit_id=$_GET['edit_id'];
			$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
			$query="UPDATE pages SET title='$title', content='$content', description='$description', slug='$slug' WHERE id=$edit_id";
			$result=mysqli_query($conn,$query);

			header ("Location:page-manager.php");
			exit();
		}
 		$edit_id = $_GET['edit_id'];

	?>


	<?php include("header.php") ?>


	<title>edit page</title>

	
	<!-- creating html form for editing -->
 	
 	<form class="image-table editpg" method="POST" action="<?php echo $sitepath; ?>/admin/view/edit-page.php?edit_id=<?php echo $edit_id; ?>&update=true"> <!-- getting edit_id -->
 		

 		<label>Title:</label><br><input type="text" name="title" placeholder="Title" value="<?php echo $row['title']; ?>"><br><br>


 		<label>Content:</label>
		 <textarea name="content" name="editor1" id="editor1" rows="6" cols="50"><?php echo $row['content']; ?></textarea><br>

 		<label>Description:</label><br><input type="text" name="description" placeholder="description" value="<?php echo $row['description']; ?>"><br><br>

 		<button type="submit" name="update" id="update">update</button>
 	</form>


 	<script src="<?php echo $sitepath; ?>/admin/static/ckeditor/ckeditor.js"></script>
	<script>
    	CKEDITOR.replace( 'editor1' );
	</script>

<?php include("footer.php") ?>
 