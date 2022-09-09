<?php


namespace App\classes;


class Student
{
    public $student=[];
    public function __construct()
    {
        $this->student=[
            0=>[
                'id'=>'CSE-150',
                'name'=>'Rafi Ahmed',
                'email'=>'rafi@gmail.com',
                'phone'=>'0145566654',
            ],
            1=>[
                'id'=>'CSE-130',
                'name'=>'Arif',
                'email'=>'arif2@gmail.com',
                'phone'=>'0135566654',
            ],
            2=>[
                'id'=>'CSE-122',
                'name'=>'Shakib',
                'email'=>'shakib@gmail.com',
                'phone'=>'0155050054',
            ]
        ];
    }

    public function studentsInf(){
        return $this->student;
    }

}