<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $aboutProject = htmlspecialchars($_POST['aboutProject']);

    
    $to = 'hr@qonkar.com'; 
    $subject = 'New Contact Form Submission';
    $message = "Full Name: $fullName\nEmail: $email\nPhone Number: $number\nProject Details: $aboutProject";
    $headers = "From: $email";

    
    if (mail($to, $subject, $message, $headers)) {
        echo 'Email has been sent successfully!';
    } else {
        echo 'There was an error sending the email.';
    }
} else {
    echo 'Invalid request method.';
}
?>