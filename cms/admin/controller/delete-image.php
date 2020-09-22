<?php 
	include 'databaseconnect.php';
	global $conn;

		$sql = "SELECT * FROM images WHERE id=" . $_GET['delete_id'];
		$result = mysqli_query($conn, $sql);
		$row= mysqli_fetch_assoc($result);
		$filename= $row['image'];


		$sql = "DELETE FROM images WHERE id=" .$_GET['delete_id'];
		$result= mysqli_query($conn,$sql);
		unlink('../uploads/' . $filename);
		
	    header("Location:../view/image-manager.php");
	    exit();
?>



 
