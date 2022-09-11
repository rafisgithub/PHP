<?php


namespace App\classes;


class Database
{
    public $hostName,$user,$password,$databaseName,$dbConn;
    public function __construct()
    {
        $this->hostName='localhost';
        $this->user='root';
        $this->password='';
        $this->databaseName='class_32';
    }
    public function dbConnect(){
       $this->dbConn= mysqli_connect($this->hostName,$this->user,$this->password,$this->databaseName);
       return $this->dbConn;
    }
}