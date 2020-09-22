<?php 
	include 'databaseconnect.php';
	global $conn;

	if(isset($_POST['submit'])){

		$title = $_POST['title'];
		$description = $_POST['description'];
		$filename = $_FILES['uploadfile']['name'];
		$tempname = $_FILES['uploadfile']['tmp_name'];
		$page_id=$_POST['select-page'];
		$folder = "../uploads/".$filename;
		move_uploaded_file($tempname, $folder);

		if($title!="" && $description!="" && $filename !=""){
			$sql="INSERT INTO images (title, description, image, page_id) VALUES ('$title','$description','$filename','$page_id')";
			$result=mysqli_query($conn,$sql);


			if($result){
				header("Location:../view/image-manager.php");
				exit();

			}else{
				echo "error uploading to database";
			}
		}else{
			echo "please enter the details <a href= 'http://localhost/cms/admin/view/add-image.php'><strong>click here</strong></a> ";
		}

	}else{
		header("Location: ../view/add-image.php");
		exit();
	}
?>
