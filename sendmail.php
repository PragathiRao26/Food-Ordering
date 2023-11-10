<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
$mail = new PHPMailer(true);

try{
    
    $email =  $_POST['user-email'];

    $link="<a href='localhost/onlinefood-php/forgotpass.php'>Click To Reset password</a>";
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'raopragathi100@gmail.com';                 
    $mail->Password   = 'glev dnlo gjys amqx';                        
    $mail->SMTPSecure = 'ssl';                              
    $mail->Port       = 465;  
  
    $mail->setFrom('raopragathi100@gmail.com');           
    $mail->addAddress($email);
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Subject';
    $n = rand(1000,9999);
    $_SESSION['$n'] = $n;
    $mail->Body    = "OTP :".$n;
    $mail->send();
    echo '<script>window.location.href = "forgotpass.php";</script>';
} 

catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

  }	

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
        /* styles.css */
.main-content {
    background-image: url('restrrr.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional */
}

    </style>
</head>
<body>
  
</body>
</html>