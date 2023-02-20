<?php
session_start();
include '../db/connection.php';
include '../helper.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the data from the form
    $data = getRegistrationInfo($_POST);

    // Check if the data is valid
    if(validateRequestData($data)){
        // Insert the data into the database
        $query = insert('users', $data);
        $result = mysqli_query($connection, $query);

        if($result){
            $_SESSION['message'] = 'Registration successful';
            $_SESSION['message_type'] = 'success';
            header('location: ../signup.php');
        }else{
            $_SESSION['message'] = 'Registration failed';
            $_SESSION['message_type'] = 'danger';
            header('location: ../signup.php');
        }
    }
    else{
        $_SESSION['message'] = 'All the fields are required';
        $_SESSION['message_type'] = 'danger';
        header('location: ../signup.php');
    }
}

// get the data from the form
function getRegistrationInfo($request){
    return [
        'first_name' => $request['first_name'],
        'last_name' => $request['last_name'],
        'email' => $request['email'],
        'password' => $request['password'],
        'confirm_password' => $request['confirm_password'],
        'phone' => $request['phone'],
        'role' => 'user'
    ];
}

?>