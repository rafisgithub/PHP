<?php
session_start();

// Check if the user is already logged in
if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
}

// Check if the form has been submitted
if (isset($_POST['root']) && isset($_POST['password'])) {
  // Connect to the database
  $db = new mysqli('localhost', 'root', '', 'attendance_system');

  // Get the user with the provided username and password
  $username = $db->real_escape_string($_POST['root']);
  $password = $db->real_escape_string($_POST['password']);
  $result = $db->query("SELECT id, username FROM users WHERE username = '$username' AND password = '$password'");
  $user = $result->fetch_assoc();
  $result->close();

  // If a user is found, log them in and redirect to the index page
  if ($user) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['root'] = $user['root'];
    header('Location: index.php');
    exit();
  } else {
    $error = 'Invalid username or password';
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Attendance System - Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Student Attendance System - Login</h1>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="POST" action="./index.php">
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>
    <button type="submit">Login</button>
  </form>
</body>
</html>
