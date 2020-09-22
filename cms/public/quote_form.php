<?php 
	include '../admin/controller/databaseconnect.php';
	global$conn;
	$sql="SELECT * FROM users";
	$query=mysqli_query($conn,$sql);
	$query_result=mysqli_fetch_array($query);
	$email_id=$query_result['email'];

	use PHPMailer\PHPMailer\PHPMailer;	
	use PHPMailer\PHPMailer\Exception;

	require '../admin/static/phpmailer/src/Exception.php';
	require '../admin/static/phpmailer/src/PHPMailer.php';
	require '../admin/static/phpmailer/src/SMTP.php';

	if(isset($_POST['submit'])){
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$phonenumber=$_POST['phonenumber'];
		$email=$_POST['email'];
		$firstname=$_POST['firstname'];
		$temp_address=$_POST['address1'];
		$perm_address=$_POST['address'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		$postal_code=$_POST['code'];
		$date=$_POST['date'];
		$contact_me=$_POST['contact_me'];
		$gender=$_POST['gender'];
		$services=$_POST['services'];
		$other_notes=$_POST['notes'];
		$robotest = $_POST['robotest'];

    	if($robotest){
      	$error = "You are a gutless robot.";
        }
        if(empty($firstname) || empty($lastname) || empty($phonenumber) || empty($email)){
        	echo 'please fill the form feilds';
        }
        else{
			$mail = new PHPMailer;                             				// Passing `true` enables exceptions
					// $mail->SMTPDebug = 4;
				try {
				    //Server settings
				    $mail->isSMTP();                                        // Set mailer to use SMTP
				    $mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
				    $mail->SMTPAuth = true;                                 // Enable SMTP authentication
				    $mail->Username = 'cloudroshanp@gmail.com';             // SMTP username
				    $mail->Password = 'cloud_roshan';                       // SMTP password
				    $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
				    $mail->Port = 465;                                      // TCP port to connect to
				    $mail->SMTPOptions = array(
					    'ssl' => array(
					        'verify_peer' => false,
					        'verify_peer_name' => false,
					        'allow_self_signed' => true
					    )
					);
				    //Recipients
				    $mail->setFrom('cloudroshanp@gmail.com', '');
				    $mail->addAddress($email_id);

				    //Content
				    $mail->isHTML(true);                                  // Set email format to HTML
				    $mail->Subject = 'quotation request';
				    $mail->Body    = 'From :' .$mail->Username. '<br>
									  To: '.$email_id.
									  '<br>Reply to:' .$mail->Username.
									  '<br>Subject: Quote request from' .$firstname.
									  '<br>Body:<br>
										Hi Admin<br>,
										You’ve received a quote request from website on:' .$date. 
										'<br>Thank you<br>,' .$firstname.' '.$lastname;
				    if($mail->send()) {
				    	// echo 'Message has been sent';
				    	header("Location:request-quote.php");
					}
				} catch (Exception $e) {
				    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		}

	}


 ?>