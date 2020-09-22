<?php 
	include "../controller/databaseconnect.php";
	global $conn;
	global $sitepath;

	if(isset($_POST['submit'])){						
			$title=$_POST['title'];
			$description=$_POST['description'];

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
		$sql = "INSERT INTO slides (`title`, `description`, `image`) VALUES ('$title','$description','$filename_for_multiple_files')";
		$result = mysqli_query($conn,$sql);	
		
		header("Location:../view/slider-manager.php");
		exit();
	}
?>



