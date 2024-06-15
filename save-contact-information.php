<?php
$servername = "localhost";
$username = "qonkar";
$password = "Qonkar3972";
$dbname = "qonkar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formhelp = $_POST['form_help'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $country = $_POST['country'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    $agree_newsletter = isset($_POST['agree_newsletter']) ? 1 : 0;
    $agree_terms = isset($_POST['agree_terms']) ? 1 : 0;

    $stmt = $conn->prepare("INSERT INTO contactus_form (form_help, fullname, email, number, country, company, message, agree_newsletter, agree_terms) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssi", $formhelp, $fullname, $email, $number, $country, $company, $message, $agree_newsletter, $agree_terms);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>