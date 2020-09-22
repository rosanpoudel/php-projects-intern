<?php 
	include '../controller/databaseconnect.php';
	global $conn;

	$sql = "DELETE FROM slides WHERE id=". $_GET['delete_id'];
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	$filename=$row['image'];

	if ($result === TRUE) {
		unlink('../uploads/' . $filename);
		header("Location:../view/slider-manager.php");
	    exit();
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
?>

 
