<?php 
// If the user is not logged in, redirect to the login page
include './security.php';

session_start();
session_destroy();
header('location: signin.php');
