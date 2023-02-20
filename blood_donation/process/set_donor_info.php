<?php
session_start();
include '../db/connection.php';
include '../helper.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $donor_info = setDonorInfo($_POST);

    // validation check ...
    if(validateRequestData($donor_info)){
        $sql = insert('donors', $donor_info);
        $result = mysqli_query($connection, $sql);
        if($result){
            $_SESSION['message'] = 'Donor info added successfully';
            $_SESSION['message_type'] = 'success';
            header('location: ../donor_info.php?user='. $donor_info['user_id']);
        }else{
            $_SESSION['message'] = 'Invalid form submission';
            $_SESSION['message_type'] = 'danger';
            header('location: ../be_donor.php');
        }
    }
    else{
        $_SESSION['message'] = 'All fields are required';
        $_SESSION['message_type'] = 'danger';
        header('location: ../be_donor.php');
    }
}


//set donor info
function setDonorInfo($request){
    return [
        'user_id' => $request['user_id'],
        'blood_group' => $request['blood_group'],
        'present_address' => $request['present_address'],
        'last_date_of_donation' => $request['donation_date'],
        'gender' => $request['gender']
    ];
}