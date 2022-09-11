<?php


namespace App\classes;

use App\classes\Database;

class Student
{
    public $name,$roll,$phone,$email,$department,$session,$address,$sql,$database,$allInfo;
    public function __construct($data)
    {
        $this->name=$data['name'];
        $this->roll=$data['roll'];
        $this->phone=$data['phone'];
        $this->email=$data['email'];
        $this->department=$data['department'];
        $this->session=$data['session'];
        $this->address=$data['address'];
    }
    public function newStudent()
    {
       $this->sql="INSERT INTO students(name,roll,phone,email,department,session,address) VALUES('$this->name','$this->roll','$this->phone','$this->email','$this->department','$this->session','$this->address')";
        $this->database= new Database();

        mysqli_query($this->database->dbConnect(), $this->sql);
        return 'succuss';
    }
    public function getAllStudentInfo(){
        $this->sql="SELECT * FROM students";
        $this->database=new Database();
        $this->allInfo= mysqli_query($this->database->dbConnect(), $this->sql);
        return$this->allInfo;
    }
}