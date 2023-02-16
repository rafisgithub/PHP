<?php
// Connect to the database
$db = new mysqli('localhost', 'username', 'password', 'attendance_system');

// Get the student ID and date from the GET parameters
$student_id = $_GET['student_id'];
$date = $_GET['date'];

// Check if the student ID and date are valid
if (!is_numeric($student_id) || !strtotime($date)) {
  echo 'Invalid QR code';
  exit();
}

// Get the attendance record for the student and date
$result = $db->query("SELECT * FROM attendance_system WHERE student_id = $student_id AND date = '$date'");
$record = $result->fetch_assoc();
$result->close();

// Determine the attendance status based on the existing record, if any
if ($record) {
  if ($record['present']) {
    $status = 'You have already been marked present today';
  } else {
    $status = 'Your attendance_system has been updated to present';
    $db->query("UPDATE attendance_system SET present = 1 WHERE student_id = $student_id AND date = '$date'");
  }
} else {
  $status = 'Your attendance has been recorded as present';
  $db->query("INSERT INTO attendance (student_id, date, present) VALUES ($student_id, '$date', 1)");
}

// Render the page with the attendance status
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Attendance System - Scan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Student Attendance System - Scan</h1>
  <p><?php echo $status; ?></p>
</body>
</html>
