<?php
session_start();
include '../security.php';
include '../db/connection.php';
include '../helper.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['request_type'];
    $request_data = getRequestData($_POST);
    

    if(!validateRequestData($request_data)){
        $_SESSION['message'] = 'All the fields are required';
        $_SESSION['message_type'] = 'danger';
        header('location: ../'. $type . '_request.php');
        exit;
    }
    else{
        $sql = insert('requests', $request_data);
        $result = $connection->query($sql);

        if($result){
            $_SESSION['message'] = 'Request submitted successfully';
            $_SESSION['message_type'] = 'success';
            header('location: ../'. $type . '_request.php');
            exit;
        }
        else{
            $_SESSION['message'] = 'Request submission failed';
            $_SESSION['message_type'] = 'danger';
            header('location: ../'. $type . '_request.php');
            exit;
        }
    }
}

// Structuring the requested data ...
function getRequestData($request){
    return [
        'patient_name' => $request['patient_name'],
        'hospital_name' => $request['hospital_name'],
        'hospital_address' => $request['hospital_address'],
        'phone_number' => $request['phone_number'],
        'request_type' => $request['request_type'],
        'blood_group' => $request['blood_group'],
        'units' => $request['units'],
        'donation_date' => $request['donation_date'],
        'donation_time' => $request['donation_time'],
        'requested_by' => $_SESSION['id'] ?? 1,
    ];
}