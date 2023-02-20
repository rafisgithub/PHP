<?php
    session_start();
    include '../db/connection.php';
    include '../helper.php';

    $email = "";
    $password = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        if (empty($email) || empty($password)) {
            $_SESSION['message'] = 'All the fields are required';
            $_SESSION['message_type'] = 'danger';
        }

        // select all clients from database where email and password match
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $connection->query($sql);
        $info = $result->fetch_assoc();

        $_SESSION = $info;
        //dview($_SESSION);

        if ($info['role'] == 'admin') {
            $_SESSION['message'] = "Admin login successful!";
            $_SESSION['message_type'] = 'success';
            header("Location: ../admin_dashboard.php");
        } 
        elseif($info['role'] == 'user'){
            $_SESSION['message'] = 'User login successful!';
            $_SESSION['message_type'] = 'success';
            header("Location: ../index.php");
        }
        else {
            $_SESSION['message'] = "Login failed";
            $_SESSION['message_type'] = 'danger';
            header("Location: ../signin.php");
        }
    }