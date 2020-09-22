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

	$posts="SELECT * FROM posts WHERE id=".$_GET['edit_id'];
	$posts_result=mysqli_query($conn,$posts);
	$edit_id=$_GET['edit_id'];
	$rows=mysqli_fetch_array($posts_result);

	if (isset($_POST['submit'])) {
		$title= $_POST['title'];
		$content= $_POST['content'];
		$seo_title= $_POST['seo-title'];
		$meta_title= $_POST['meta-title'];
		$meta_keyword= $_POST['meta-keyword'];
		$added_date= $_POST['date'];
		$query="UPDATE posts SET title='$title', content='$content', seo_title='$seo_title', meta_title='$meta_title', meta_keyword='$meta_keyword' WHERE id= $edit_id";
		$updatequery=mysqli_query($conn,$query);
		header("Location:http://localhost/cms/admin/view/posts-manager.php");
	}
?>

	
<title>edit posts</title>

<div class="content editpg">
	<form  action="<?php echo $sitepath ?>/admin/view/edit-post.php?edit_id=<?php echo $edit_id;?>&&submit=true"  method="POST">
		<label>Title :</label><br>
		<input type="text" name="title" value="<?php echo $rows['title']; ?>"><br><br>

		<label>Content :</label><br>
		<input type="text" name="content" value="<?php echo $rows['content']; ?>"><br><br>

		<label>seo title :</label><br>
		<input type="text" name="seo-title" value="<?php echo $rows['seo_title']; ?>"><br><br>

		<label>meta title :</label><br>
		<input type="text" name="meta-title" value="<?php echo $rows['meta_title']; ?>"><br><br>

		<label>meta keyword :</label><br>
		<input type="text" name="meta-keyword" value="<?php echo $rows['meta_keyword']; ?>"><br><br>

		<label>added date :</label><br>
		<input type="date" name="date"><br><br>

		<input type="submit" name="submit">
	</form>
</div>	

<?php include ("footer.php") ?>
