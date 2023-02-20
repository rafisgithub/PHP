<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

//if session don't have name
if (empty($_SESSION['id']) || empty($_SESSION['role'])){
    $message = '<h1 style="color: red;">ACCESS DENIED ...</h1>';
    $message .= '<h3>You must be logged in to access this page</h3>';
    $message .= '<p><a href="signin.php">=> Please Login</a></p>';

    echo $message;
    die();
}