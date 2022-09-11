<?php


namespace App\classes;


class Home
{
    public function index(){
        header('Location:action.php?page=home');
    }
}