<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed " . mysqli_connect_error());
}
// echo "Connected Successfully";

?>