
<?php
function sendMail($from, $to, $subject, $message, $replyTo) {

    require_once("../resources/phpmailer/PHPMailerAutoload.php");

    $mail = new PHPMailer;
                                

    $mail->isSMTP();                                      
    $mail->Host = 'ssl://smtp.gmail.com';                 
    $mail->SMTPAuth = true;                               
    $mail->Username = 'cloudroshanp@gmail.com';
    $mail->Password = 'cloud_roshan';                             
    $mail->SMTPSecure = 'tls';                            
    $mail->Port = 465;                                   

    $mail->setFrom($from, '');
    $mail->addAddress($to, '');                         
    $mail->addReplyTo($replyTo, '');
    $mail->isHTML(true);                                 

    $mail->Subject = $subject;
    $mail->Body    = $message;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
    }
    else{
        echo 'Your Password is sent through your email,please get updated!!';
    }

}



