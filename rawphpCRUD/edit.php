<?php
require_once 'databaseConnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch record from the database based on the ID
    $sql = "SELECT * FROM register WHERE id='$id'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $nationalId = $row['national_id'];
        $gender = $row['gender'];
        $district = $row['district'];
    } else {
        echo "No record found";
        exit();
    }
} else {
    echo "ID not provided";
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Example - Edit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Edit Record</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="name" placeholder="Name" value="<?php echo $name; ?>" required>
        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
        <input type="tel" name="phone" placeholder="Phone" value="<?php echo $phone; ?>" required>
        <input type="text" name="national_id" placeholder="National ID" value="<?php echo $nationalId; ?>" required>
        <input type="radio" name="gender" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?> required> Male
        <input type="radio" name="gender" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?> required> Female
        <input type="text" name="district" placeholder="District" value="<?php echo $district; ?>" required>
        <button type="submit">Update Record</button>
    </form>
</body>
</html>
