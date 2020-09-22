<?php 
	include "databaseconnect.php";
	global $conn;

	if (isset($_POST['submit'])) {
		header('Content-Type: text/csv; charset=utf-8');
		header('Content-Deposition: attachment; filename=data.csv');
		$output= fopen("php://output", "w");
		fputcsv($output,array('ID' , 'E-MAIL' , 'DATE'));
		$query="SELECT * FROM subscribers";
		$result=mysqli_query($conn,$query);
		while ($row=mysqli_fetch_assoc($result)) {
			fputcsv($output,$row);
		}
		fclose($output);
	}
 ?>

