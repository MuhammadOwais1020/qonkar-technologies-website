<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qonkar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email']) && isset($_POST['password'])){
    $query = "SELECT * FROM adminlogin WHERE email='".$_POST['email']."' AND password = '".$_POST['password']."'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['email'] = $_POST['email'];
        echo 'Yes';
    }
    else{
        echo 'No';
    }
    exit;
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

// Return JSON response for AJAX
header('Content-Type: application/json');
echo json_encode($info);
?>