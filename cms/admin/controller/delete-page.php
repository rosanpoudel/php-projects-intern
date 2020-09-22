<?php 
	include 'databaseconnect.php';
	global $conn;

	$sql = "DELETE FROM pages WHERE id=". $_GET['delete_id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$filename=$row['image'];


	if ($result === TRUE) {
		unlink('../uploads/' . $filename);
	    header("Location:../view/page-manager.php");
	    exit();
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
?>

 
