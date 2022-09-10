<?php


namespace App\classes;
use App\classes\Database;
class Student
{
    public $name,$phone,$email,$seip_id,$database,$sql;

    public function __construct($post)
    {
        $this->name=$post['name'];
        $this->phone=$post['phone'];
        $this->email=$post['email'];
        $this->seip_id=$post['seip_id'];
    }
    public function newStudent(){
      $this->sql="  INSERT INTO students(name,phone,email,seip_id) VALUES('$this->name','$this->phone','$this->email','$this->seip_id')";
      $this->database=new Database();
      mysqli_query($this->database->dbCoonect(),$this->sql);
      echo 'success';
    }

}