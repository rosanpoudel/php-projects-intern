<?php 
	include "../controller/databaseconnect.php";
	include "../controller/siteconfiguration.php";
	global $conn;
	global $sitepath;
	
	if(isset($_POST['submit'])){
			$title= $_POST['title'];
			$content= $_POST['content'];
			$seo_title= $_POST['seo-title'];
			$meta_title= $_POST['seo-title'];
			$meta_keyword= $_POST['meta-keyword'];
			$added_date= $_POST['date'];
			
			$filename_for_multiple_files = '';

			for($i = 0; $i < count($_FILES['uploadfile']['name']); $i++){
				$filetmp = $_FILES["uploadfile"]["tmp_name"][$i];
				$filename = $_FILES["uploadfile"]["name"][$i];
				$filetype = $_FILES["uploadfile"]["type"][$i];
				$filepath =  "../uploads/".$filename;
				$filename_for_multiple_files .= $filename . " ";
				$upload=move_uploaded_file($filetmp,$filepath);
			}
			$filename_for_multiple_files = trim($filename_for_multiple_files, " ");

			$post_query="INSERT INTO posts (title, content, seo_title, meta_title, meta_keyword, added_date, image) VALUES ('$title','$content','$seo_title','$meta_title','$meta_keyword','$added_date' , '$filename_for_multiple_files')";
			$post_query_check=mysqli_query($conn,$post_query);
		
		header("Location:../view/posts-manager.php");
		exit();
	}
?>