<?php

require '/PHPMailer/src/Exception.php';
require '/PHPMailer/src/PHPMailer.php';
require '/PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                    // Send using SMTP
    $mail->Host       = 'mail.qonkar.com';          // Set the SMTP server to send through (replace with your actual SMTP host)
    $mail->SMTPAuth   = true;                           // Enable SMTP authentication
    $mail->Username   = 'hr@qonkar.com';                // SMTP username
    $mail->Password   = 'Hp.dell.39.72';          // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; use `PHPMailer::ENCRYPTION_SMTPS` for SSL
    $mail->Port       = 587;                            // TCP port to connect to

    // Recipients
    $mail->setFrom('hr@qonkar.com', 'Qonkar HR');       // Sender address and name
    $mail->addAddress('mowaisrehmani@gmail.com');         // Add a recipient (replace with actual recipient)

    // Content
    $mail->isHTML(true);                                // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the plain text message body for non-HTML email clients';

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>