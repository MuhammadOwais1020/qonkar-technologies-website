<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$fullName = htmlspecialchars($_POST['fullName']);
$email = htmlspecialchars($_POST['email']);
$number = htmlspecialchars($_POST['number']);
$aboutProject = htmlspecialchars($_POST['aboutProject']);
    
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'qonkartechnologiespvtltd@gmail.com';
    $mail->Password   = 'pvbabjjlrxrqklkw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST["email"]);
    
    $mail->addAddress('qonkartechnologiespvtltd@gmail.com');
    

    $mail->isHTML(true);
    
    $mail->Subject = 'New Email from Website';
    $mail->Body    = "Full Name: $fullName<br>Email: $email<br>Phone Number: $number<br>Project Details: $aboutProject";
    $mail->AltBody = 'This is the plain text message body for non-HTML email clients';

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>