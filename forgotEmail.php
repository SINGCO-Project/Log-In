<?php

$success = "";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\Users\HP\vendor\autoload.php';
$mail = new PHPMailer(true);

if(isset($_POST['button_forgot']))
{
  $replyTo = $_POST['forgot_email'];                          //initialize email input of SRE

  try{

    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'singcofp@gmail.com';                   //SMTP temporary username (change if there's an official email for SMTP)
    $mail->Password   = '@S1ngc0FP';                            //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


    //Recipients
    $mail->setFrom('singcofp@gmail.com', 'Student Records Evaluator');  //SMTP username + name to appear in email
    $mail->addAddress('kiannelance5@gmail.com');            //input OUR email here
    $mail->addReplyTo($replyTo, 'OUR');                     //here goes the SRE's email input

    //Content
    $mail->isHTML(true);                                    //Set email format to HTML
    $mail->Subject = '[REQUEST] SINGCO Change Password';    //subject
    $mail->Body    = 'Hi! May I request for a change of password. Thank you!';  //message

    $mail->send();
    $success .= "Email sent!";

  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      exit;
  }
}
?>
