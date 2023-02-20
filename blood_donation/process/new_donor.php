<?php
session_start();
include '../db/connection.php';
include '../helper.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $info = newDonor($_POST);

    // validation check ...
    if(validateRequestData($info['user_info'])){
        $sql = insert('users', $info['user_info']);
        $result = mysqli_query($connection, $sql);

        if($result){
            $user_id = mysqli_insert_id($connection);
            $info['donor_info']['user_id'] = $user_id;
            $sql = insert('donors', $info['donor_info']);
            $result = mysqli_query($connection, $sql);

            if($result){
                $_SESSION['message'] = 'Donor info added successfully';
                $_SESSION['message_type'] = 'success';
                header('location: ../admin_dashboard.php');
            }else{
                $_SESSION['message'] = 'Invalid form submission';
                $_SESSION['message_type'] = 'danger';
                header('location: ../addonor.php');
            }
        }
        else{
            $_SESSION['message'] = 'Invalid form submission';
            $_SESSION['message_type'] = 'danger';
            header('location: ../addonor.php');
        }
    }
    else{
        $_SESSION['message'] = 'All fields are required';
        $_SESSION['message_type'] = 'danger';
        header('location: ../addonor.php');
    }
}


//set donor info
function newDonor($request){
    return [
        'user_info' => [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'role' => 'user'
        ],
        'donor_info' => [
            'blood_group' => $request['blood_group'],
            'present_address' => $request['present_address'],
            'last_date_of_donation' => $request['donation_date'],
            'gender' => $request['gender']
        ]
    ];
}