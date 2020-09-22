<?php
	include 'databaseconnect.php';
	global $conn;

	if (isset($_POST['submit'])){
		if("" != trim($_POST['select-page'])){
			$parent_id= $_POST['select-page'];
		}
		else{
			$parent_id='-1';
		}

		$title=mysqli_real_escape_string($conn, $_POST['title']);
		$content=mysqli_real_escape_string($conn, $_POST['content']);
		$description=mysqli_real_escape_string($conn, $_POST['description']);
		$slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
	

		if(empty($title) || empty($content)){
			echo"All feilds must be Filled <a href=http://localhost/cms/admin/view/add-page.php><strong>CLICK HERE</strong></a> to try again";
		}else{
			$sql = "INSERT INTO pages (`title`, `content`, `description`,`parent_id`,`slug`) VALUES ('$title', '$content', '$description', '$parent_id','$slug' )";
			$result = mysqli_query($conn , $sql);
			header("Location:../view/page-manager.php");
			exit();
		}
	

	}else{
		header("Location:../view/add-page.php");
		exit();
	}

?>