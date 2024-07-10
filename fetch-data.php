<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qonkar"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $stmt = $conn->prepare("SELECT email, password FROM adminlogin WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $stmt->bind_result($retrieved_email, $retrieved_password);
    $stmt->fetch();

    if ($retrieved_email && $retrieved_password) {
        // session_start();
        $_SESSION['email'] = $email;
        echo 'success';
    } else {
        echo 'Invalid username or password';
    }
    $stmt->close();
}

$sql = "SELECT * FROM contactus_form";
$result = $conn->query($sql);

$info = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $info[] = $row;
    }
}

$conn->close();

echo json_encode($info);
?> 


