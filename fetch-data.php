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
// $sql = "SELECT * FROM contactus_form";
// $result = $conn->query($sql);

// $info = [];

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $info[] = $row;
//     }
// }

// $sql = "SELECT * FROM career_opportunity_applynow";
// $result = $conn->query($sql);

// $info = [];

// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $info[] = $row;
//     }
// }
$info_contact = [];
$info_career = [];

$sql = "SELECT * FROM contactus_form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $info_contact[] = $row;
    }
}

$sql = "SELECT * FROM career_opportunity_applynow";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $info_career[] = $row;
    }
}

$conn->close();

$response = ['contact' => $info_contact, 'career' => $info_career];

// Return JSON response for AJAX
header('Content-Type: application/json');
echo json_encode($response);

// $conn->close();
// Return JSON response for AJAX
// header('Content-Type: application/json');
// echo json_encode($info);
?>

