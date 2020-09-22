<?php 
	include 'databaseconnect.php';
	global $conn;

	$sql = "DELETE FROM subscribers WHERE id=". $_GET['delete_id'];
	$result=mysqli_query($conn,$sql);

	if ($result === TRUE) {
	    header("Location:../view/subscribers.php");
	    exit();
	} else {
	    echo "Error deleting record: " . $conn->error;
	}
?>

 
