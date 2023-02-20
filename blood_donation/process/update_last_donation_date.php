<?php
session_start();
include '../db/connection.php';

// update last donation date
$user_id = $_POST['user_id'];
$newDate = $_POST['last_date_of_donation'];
$sql = "UPDATE donors SET last_date_of_donation = '$newDate' WHERE user_id = $user_id";

$result = $connection->query($sql);

if ($result) {
    $_SESSION['message'] = 'Date updated successfully';
    $_SESSION['message_type'] = 'success';
} else {
    $_SESSION['message'] = 'Something went wrong!';
    $_SESSION['message_type'] = 'danger';
}

header("location: ../donor_info.php?user=$user_id");
exit();