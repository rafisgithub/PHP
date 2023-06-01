<?php
require_once 'databaseConnection.php';

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nationalId = $_POST['national_id'];
$gender = $_POST['gender'];
$district = $_POST['district'];

// Insert data into the database
$sql = "INSERT INTO register (name, email, phone, national_id, gender, district)
        VALUES ('$name', '$email', '$phone', '$nationalId', '$gender', '$district')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
