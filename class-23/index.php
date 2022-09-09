<?php
require_once 'vendor\autoload.php';
use App\classes\Home;
$hello=new Home('Hey man.Whats Up?');
$hello->index();
?>