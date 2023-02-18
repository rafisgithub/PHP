<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['root'])) {
  header('Location: login.php');
  exit();
}

// Connect to the database
$db = new mysqli('localhost', 'root', 'password', 'attendance');

// Handle form submission
if (isset($_POST['submit'])) {
  $student_id = $_POST['student_id'];
  $date = date('Y-m-d');
  $present = isset($_POST['present']) ? 1 : 0;

  // Insert or update attendance record
  $stmt = $db->prepare('INSERT INTO attendance (student_id, date, present) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE present = VALUES(present)');
  $stmt->bind_param('iss', $student_id, $date, $present);
  $stmt->execute();
  $stmt->close();
}

// Get list of students
$result = $db->query('SELECT * FROM students');
$students = $result->fetch_all(MYSQLI_ASSOC);
$result->close();

// Get attendance records for today
$date = date('Y-m-d');
$result = $db->query("SELECT * FROM attendance WHERE date = '$date'");
$attendance = $result->fetch_all(MYSQLI_ASSOC);
$result->close();
$attendance_by_student = array();
foreach ($attendance as $record) {
  $attendance_by_student[$record['student_id']] = $record;
}

// Render the page
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Attendance System - Manual</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Student Attendance System - Manual</h1>
  <p>Welcome, <?php echo $_SESSION['root']; ?>! <a href="logout.php">Logout</a></p>
  <h2>Record Attendance Manually</h2>
  <form method="post">
    <label for="student_id">Student:</label>
    <select name="student_id" id="student_id">
      <?php foreach ($students as $student): ?>
        <option value="<?php echo $student['id']; ?>"><?php echo $student['name']; ?></option>
      <?php endforeach; ?>
    </select>
    <br>
    <label for="present">Present:</label>
    <input type="checkbox" name="present" id="present">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
  <br>
  <a href="index.php">Back to attendance page</a>
</body>
</html>
