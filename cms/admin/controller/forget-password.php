<?php 
	use PHPMailer\PHPMailer\PHPMailer;	
	use PHPMailer\PHPMailer\Exception;

	require '../static/phpmailer/src/Exception.php';
	require '../static/phpmailer/src/PHPMailer.php';
	require '../static/phpmailer/src/SMTP.php';

	include 'databaseconnect.php';
	global $conn;

	$sql="SELECT * FROM users";
	$result=mysqli_query($conn , $sql);
	$row=mysqli_fetch_assoc($result);

	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		if($email==$row['email']) {
			$random="0123";
			$random=str_shuffle($random);
			$random=substr($random,0,6);
			
			$sql= "UPDATE users SET password='$random' WHERE email='$email'";
			$result=mysqli_query($conn,$sql);
			if($result){
				$mail = new PHPMailer;                              // Passing `true` enables exceptions
				// $mail->SMTPDebug = 4;
					try {
					    //Server settings
					    $mail->isSMTP();                                      // Set mailer to use SMTP
					    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
					    $mail->SMTPAuth = true;                               // Enable SMTP authentication
					    $mail->Username = 'cloudroshanp@gmail.com';                 // SMTP username
					    $mail->Password = 'cloud_roshan';                           // SMTP password
					    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
					    $mail->Port = 465;                                    // TCP port to connect to
					    $mail->SMTPOptions = array(
						    'ssl' => array(
						        'verify_peer' => false,
						        'verify_peer_name' => false,
						        'allow_self_signed' => true
						    )
						);
					    //Recipients
					    $mail->setFrom('cloudroshanp@gmail.com', '');
					    $mail->addAddress($email);

					    //Content
					    $mail->isHTML(true);                                  // Set email format to HTML
					    $mail->Subject = 'password recovery';
					    $mail->Body    = 'your password is' . $random;

					    if($mail->send()) {
					    	// echo 'Message has been sent';
					    	header("Location:../index.php");
						}
					} catch (Exception $e) {
					    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
					}


			}else{
				echo 'failed to save to database';
			}

		}else{
			echo 'Email address doesnot exist <a href="../view/forgetpassword.php" >CLICK HERE </a> to try again';
		}
	}
	else{
		echo 'error';
	}
 ?>




