<?php
require_once 'databaseConnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Delete record from the database based on the ID
    $sql = "DELETE FROM register WHERE id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "ID not provided";
    exit();
}

$conn->close();
?>
