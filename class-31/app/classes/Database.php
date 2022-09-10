<?php


namespace App\classes;


class Database
{
    public $user;
    public  $hostName;
    public $password;
    public $databaseName;
    public $dbcon;
    public function __construct()
    {
        $this->user='root';
        $this->hostName='localhost';
        $this->password='';
        $this->databaseName='class_31';

    }
    public function dbCoonect(){
       $this->dbcon= mysqli_connect($this->hostName,$this->user,$this->password,$this->databaseName);
       return $this->dbcon;

    }

}