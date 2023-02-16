<?php
// Set database information
$host = 'localhost'; // Replace with your database host
$dbname = 'attendance_system'; // Replace with your database name
$username = 'database_username'; // Replace with your database username
$password = 'database_password'; // Replace with your database password

// Connect to database
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error connecting to database: " . $e->getMessage());
}
