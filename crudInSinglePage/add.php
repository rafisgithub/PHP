<?php
include_once 'databaseConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        echo "Record added successfully.";
    } else {
        echo "Error adding record: " . $conn->error;
    }
}

$conn->close();
?>
