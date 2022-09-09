<?php

namespace App\classes;

class Student
{
    public $student=[];
    public function __construct(){
        $this->student=[
            [
                'id'=>1,
                'name'=>'Rafi',
                'email'=>'rafi@gmail.com',
                'phone'=>'01646628341'
            ],
            [
                'id'=>1,
                'name'=>'Rafi',
                'email'=>'rafi@gmail.com',
                'phone'=>'01646628341'
            ],
            [
                'id'=>1,
                'name'=>'Rafi',
                'email'=>'rafi@gmail.com',
                'phone'=>'01646628341'
            ],
        ];
    }
    public function studentsInf(){
        return $this->student;
    }

}