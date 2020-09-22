<?php 
  include '../admin/controller/databaseconnect.php';
  include '../admin/controller/siteconfiguration.php';
  global$conn;
  global $sitepath;
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
      $email=$_POST['email'];
      $name=$_POST['name'];

      
        if(empty($name) || empty($email)){
          // echo 'please fill the form feilds';
          echo "please fill out all the feilds";
          echo "<script>setTimeout(\"location.href = '$sitepath/contact-us';\",1500);</script>";
        }
        else{
      $mail = new PHPMailer;                                    // Passing `true` enables exceptions
          // $mail->SMTPDebug = 4;
        try {
            //Server settings
            $mail->isSMTP();                                        // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
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
            $mail->Subject = 'message';
            $mail->Body    = 'From :' .$mail->Username. '<br>
                    To: '.$email_id.
                    '<br>Reply to:' .$mail->Username.
                    '<br>Subject: Quote request from'.$name.
                    '<br>Body:<br>
                    Hi Admin<br>,
                    You’ve received a message from website. <br>Thank you<br>,' .$name;
            if($mail->send()) {
              echo 'SUCCESS<br>Thank you for contacting us. We’ll get back to you soon.  <a href="./index.php">click here to go back</a>';
              // header("Location:./index.php");
          }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      }
    }

  }


 ?>