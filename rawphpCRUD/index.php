<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>RAW PHP CRUD</h2>
    <form action="add.php" method="post">
        <input type="text" name="name" placeholder="Name" >
        <input type="email" name="email" placeholder="Email" >
        <input type="tel" name="phone" placeholder="Phone" >
        <input type="text" name="national_id" placeholder="National ID" >
        <input type="radio" name="gender" value="Male" > Male
        <input type="radio" name="gender" value="Female" > Female
        <input type="text" name="district" placeholder="District" >
        <button type="submit">Add Record</button>
    </form>
    
    <h3>Registered Users</h3>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>National ID</th>
            <th>Gender</th>
            <th>District</th>
            <th>Action</th>
        </tr>
        <?php
        require_once 'databaseConnection.php';
        
        // Fetch records from the database
        $sql = "SELECT * FROM register";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['national_id']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['district']."</td>";
                echo "<td><a href='edit.php?id=".$row['id']."'>Edit</a> | <a href='delete.php?id=".$row['id']."'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        $conn->close();
        ?>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
