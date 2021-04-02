<form action="" method="post">
    <input type="email" class="input_email" name="forgot_email" placeholder="Enter Email Here" autocomplete="off" required>
    <input type="submit" value="Send details to embassy" />
    <input type="hidden" name="button_pressed" value="1" />
</form>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\Users\HP\vendor\autoload.php';
$mail = new PHPMailer(true);

if(isset($_POST['button_pressed']))
{
  $replyTo = $_POST['forgot_email'];
  try{
  //Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'kiannelancelee@gmail.com';                     //SMTP username
$mail->Password   = '#Kenkianne1';                               //SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


//Recipients
    $mail->setFrom('kiannelancelee@gmail.com', 'Student Records Evaluator');
    $mail->addAddress('kiannelance5@gmail.com');     //Add a recipient
    $mail->addReplyTo($replyTo, 'OUR');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '[REQUEST] SINGCO Change Password';
    $mail->Body    = 'Hi! May I request for a change of password. Thank you!';

    $mail->send();
    echo 'Message has been sent';
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}

?>
