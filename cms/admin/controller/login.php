
<?php
	session_start();
	include 'siteconfiguration.php';
	global $sitepath;

	include 'databaseconnect.php';
	global $conn;

	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		//checking for empty feilds

		if(empty($email) || empty($password)){
			echo "Form must be Filled <a href=$sitepath/admin/index.php><strong>CLICK HERE</strong></a> to try again" ;
			} 
			else{
				$sql = " SELECT * FROM users WHERE email ='{$email}' AND password ='{$password}'";
				$result = mysqli_query($conn , $sql);
				$resultcheck = mysqli_fetch_array($result);
				// checking if entered id and password match the database value or not

				if($resultcheck['email']== $email && $resultcheck['password']== $password ){
						// starting a session for valid users
						$_SESSION["email"]=$email;

					if(isset($_POST['remember-me'])){
						// setting cookie for remember me
						setcookie('email', $email ,time()+60*60*24*7, '/');
						setcookie('password', $password, time()+60*60*24*7, '/');
					}
					header("Location: ../view/dashboard.php");
				}else{
					//redirecting to login page if entered form value doesnot match database value
					echo "INCORRECT ID OR PASSWORD";
					echo "<script>setTimeout(\"location.href = '../index.php';\",1500);</script>";
					exit();
				}
		}	
	}else{
		header("Location:../index.php");
		exit();
	}

?>