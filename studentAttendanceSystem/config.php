<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "attendance_system";
//create connection
$connection = new mysqli($servername, $username, $password, $database);

// Connect to database
try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Error connecting to database: " . $e->getMessage());
}
