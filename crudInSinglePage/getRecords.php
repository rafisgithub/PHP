<?php
include_once 'databaseConnection.php';

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Name: " . $row['name'] . "</p>";
        echo "<p>Email: " . $row['email'] . "</p>";
        echo "<p>Phone: " . $row['phone'] . "</p>";
        echo "<p>National ID: " . $row['national_id'] . "</p>";
        echo "<p>Gender: " . $row['gender'] . "</p>";
        echo "<p>District: " . $row['district'] . "</p>";
        echo "<button class='edit-btn' data-id='" . $row['id'] . "'>Edit</button>";
        echo "<button class='delete-btn' data-id='" . $row['id'] . "'>Delete</button>";
        echo "<hr>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
