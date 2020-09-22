<?php  
	include 'databaseconnect.php';
	global $conn;

	if (isset($_POST['submit'])) {
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = md5($conn, $_POST['password']);
		$confirm_password = md5($conn, $_POST['confirm-password']);

		if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirm_password)) {
			echo 'form details must be filled';
		}
		else{
			$sql="INSERT INTO users (email,password) VALUES ('$email','$password')";
			$result=mysqli_query($conn,$sql);
			if ($result) {
				echo 'User Registered Successfully as' . ' ' . $fname. ' ' . $lname .'<br>'. '<br>'.' ' . '<a href="../index.php" >CLICK HERE</a>' .' '. 'to login';
			}
			else{
				echo 'Failed to register the user';
			}
		}
	}else{
		header("Location: ../index.php");
	}
 ?>