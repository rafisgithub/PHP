<?php
include_once 'databaseConnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record to be edited
    $sql = "SELECT * FROM register WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        echo "<h2>Edit Record</h2>";
        echo "<form id='edit-form' data-id='" . $row['id'] . "'>";
        echo "<label for='name'>Name:</label>";
        echo "<input type='text' name='name' value='" . $row['name'] . "' required><br>";

        echo "<label for='email'>Email:</label>";
        echo "<input type='email' name='email' value='" . $row['email'] . "' required><br>";

        echo "<label for='phone'>Phone:</label>";
        echo "<input type='text' name='phone' value='" . $row['phone'] . "' required><br>";

        echo "<label for='national_id'>National ID:</label>";
        echo "<input type='text' name='national_id' value='" . $row['national_id'] . "' required><br>";

        echo "<label for='gender'>Gender:</label>";
        echo "<input type='text' name='gender' value='" . $row['gender'] . "' required><br>";

        echo "<label for='district'>District:</label>";
        echo "<input type='text' name='district' value='" . $row['district'] . "' required><br>";

        echo "<input type='submit' value='Update Record'>";
        echo "</form>";
    } else {
        echo "No record found.";
    }
}

$conn->close();
?>
