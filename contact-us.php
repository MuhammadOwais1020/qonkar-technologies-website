<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Qonkar";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection Failed: " . mysqli_connect_error());
}
else{
    echo "connected successfully";
}


mysqli_close($conn);

?>