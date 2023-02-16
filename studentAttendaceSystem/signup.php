<?php
// Start session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
  exit();
}

// Include database connection
include('config.php');

// Define variables for form fields
$username = '';
$password = '';
$error = '';

// Check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get form data
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);

  // Validate form data
  if (empty($username) || empty($password)) {
    $error = 'Please enter a username and password.';
  } else {
    // Check if username already exists
    $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user) {
      $error = 'Username is already taken. Please choose a different one.';
    } else {
      // Hash password
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      // Insert user into database
      $stmt = $pdo->prepare('INSERT INTO users (username, password) VALUES (?, ?)');
      $stmt->execute([$username, $hashed_password]);

      // Redirect to login page
      header('Location: login.php');
      exit();
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Signup</h1>
    <?php if (!empty($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
    <?php } ?>
    <form method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      <button type="submit">Signup</button>
    </form>
  </div>
</body>
</html>
