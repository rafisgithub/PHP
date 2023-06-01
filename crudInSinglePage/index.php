<!DOCTYPE html>
<html>
<head>
  <title>CRUD Application</title>
  <style>
    /* CSS styles for the form */
    form {
      margin-bottom: 20px;
    }

    input[type="text"], select {
      width: 200px;
      margin-bottom: 10px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
  <h1>CRUD Application</h1>

  <?php
    require 'databaseConnection.php';

    // Fetching records from the database
    $sql = "SELECT * FROM register";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>National ID</th><th>Gender</th><th>District</th><th>Action</th></tr>";

      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["national_id"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["district"]."</td>";
        echo "<td><a href='edit.php?id=".$row["id"]."'>Edit</a> | <a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No records found.";
    }
  ?>

  <h2>Add New User</h2>
  <form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="national_id" placeholder="National ID" required><br>
    <select name="gender" required>
      <option value="">-- Select Gender --</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select><br>
    <input type="text" name="district" placeholder="District" required><br>
    <input type="submit" value="Add User">
  </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Application</title>
  <style>
    /* CSS styles for the form */
    form {
      margin-bottom: 20px;
    }

    input[type="text"], select {
      width: 200px;
      margin-bottom: 10px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
    }
  </style>
</head>
<body>
  <h1>CRUD Application</h1>

  <?php
    require 'databaseConnection.php';

    // Fetching records from the database
    $sql = "SELECT * FROM register";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>National ID</th><th>Gender</th><th>District</th><th>Action</th></tr>";

      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["phone"]."</td>";
        echo "<td>".$row["national_id"]."</td>";
        echo "<td>".$row["gender"]."</td>";
        echo "<td>".$row["district"]."</td>";
        echo "<td><a href='edit.php?id=".$row["id"]."'>Edit</a> | <a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "No records found.";
    }
  ?>

  <h2>Add New User</h2>
  <form action="add.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="email" placeholder="Email" required><br>
    <input type="text" name="phone" placeholder="Phone" required><br>
    <input type="text" name="national_id" placeholder="National ID" required><br>
    <select name="gender" required>
      <option value="">-- Select Gender --</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select><br>
    <input type="text" name="district" placeholder="District" required><br>
    <input type="submit" value="Add User">
  </form>
</body>
</html>
