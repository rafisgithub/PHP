<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['root'])) {
  header('Location: login.php');
  exit();
}

// Connect to the database
$db = new mysqli('localhost', 'root', 'password', 'attendance_system');

// Handle form submission
if (isset($_POST['submit'])) {
  $student_id = $_POST['student_id'];
  $date = date('Y-m-d');
  $present = isset($_POST['present']) ? 1 : 0;

  // Insert or update attendance record
  $stmt = $db->prepare('INSERT INTO attendance_system (student_id, date, present) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE present = VALUES(present)');
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
$result = $db->query("SELECT * FROM attendance_system WHERE date = '$date'");
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
  <title>Student Attendance System</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>
<body>
  <h1>Student Attendance System</h1>
  <p>Welcome, <?php echo $_SESSION['root']; ?>! <a href="logout.php">Logout</a></p>
  <h2>Today's Attendance</h2>
  <p>Scan the QR code to mark your attendance:</p>
  <?php foreach ($students as $student): ?>
    <?php
      $qr_code_data = $student['id'] . '|' . $date;
      $qr_code = new QRCode($qr_code_data);
    ?>
    <h3><?php echo $student['name']; ?></h3>
    <div id="qrcode-<?php echo $student['id']; ?>"></div>
    <script>
      new QRCode(document.getElementById("qrcode-<?php echo $student['id']; ?>"), "<?php echo $qr_code_data; ?>");
    </script>
  <?php endforeach; ?>
  <br>
  <a href="manual.php">Record attendance manually</a>
</body>
</html>
