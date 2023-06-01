<?php
require_once 'databaseConnection.php';

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nationalId = $_POST['national_id'];
$gender = $_POST['gender'];
$district = $_POST['district'];

// Update record in the database
$sql = "UPDATE register SET name='$name', email='$email', phone='$phone', national_id='$nationalId',
        gender='$gender', district='$district' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
