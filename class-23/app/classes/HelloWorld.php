<?php
namespace App\classes;
class HelloWorld{
    public $message;
    public $firstName;
    public $lastName;
    public $x=10;
    public $y=20;
    public function __construct($data){
//       $this->message="Hello PHP";
//       $this->message="Hi Rafi.How are you?";
       $this->message='$data';

    }
    public function index(){
        echo $this->message;
        echo $x='This a variable x';
//        echo '<br>';
//        echo $y='This is a variable y';
//        echo '<br>';
//        echo $this->firstName='Rafi';
//        echo '<br>';
//        echo $this->lastName='Ahmed';
//        echo gettype($this->message);
//        echo '<br>';
//       echo $this->x + $this->y;
//        echo '<br>';
//        echo $this->x - $this->y;
//        echo '<br>';
//        echo $this->x * $this->y;
//        echo '<br>';
//        echo $this->x/$this->y;
//        echo '<br>';
//        echo $this->x % $this->y;
        //        echo $this->x **$this->y;


        echo '<br>';
        echo $this->x += $this->y;
        echo '<br>';
        echo $this->x -= $this->y;
        echo '<br>';
        echo $this->x *= $this->y;
        echo '<br>';
        echo $this->x/=$this->y;
        echo '<br>';
        echo $this->x %=$this->y;
        echo '<br>';
        echo $this->x **=$this->y;




    }
}
?>