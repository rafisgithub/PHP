<?php
namespace App\classes;
class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $b;
    public $c;
    public $r;
    public function __construct()
    {
        $this->message='Hello PHP.You are so cool.';
        $this->x=10;
        $this->y=20;
        $this->z=30;
        $this->c='card';
        $this->b='bkash';
        $this->r='rocket';


    }
    public function index(){
        echo $this->message .'<br>';
        echo 'Incremenat and decrement operetor' .'<br>';
        echo $this->x++ .'<br>';//10
        echo ++$this->x .'<br>';//12
        echo $this->x-- .'<br>';//12
        echo --$this->x .'<br>';//10
        echo -$this->x .'<br>';//10 here (-) is a Nagation sign like !;
        echo 'Conditional Operators' .'<br>';
        echo $this->x < $this->y ;
        echo '<br>';
        echo $this->x > $this->y ;
        echo '<br>';
        echo $this->x <= $this->y ;
        echo '<br>';
        echo $this->x >= $this->y ;
        echo '<br>';
        echo $this->x == $this->y ;
        echo '<br>';
        echo $this->x === $this->y ;
        echo '<br>';
        echo $this->x !== $this->y ;
        echo '<br>';
        echo $this->x != $this->y ;
        echo '<br>';
        echo 'Logical && Operetors'.'<br>';
        echo ($this->x < $this->y) && ($this->x <$this->z);//1
        echo '<br>';
        echo ($this->x< $this->y) && ($this->y> $this->z);//0
        echo '<br>';
        echo ($this->x< $this->y) && ($this->x <=$this->z);//0
        echo '<br>';
        echo ($this->x < $this->y) && ($this->x == $this->z);
        echo '<br>';
        echo 'Logical || OPerators' .'<br>';
        echo ($this->x < $this->y) || ($this->x <$this->z);//1
        echo '<br>';
        echo ($this->x< $this->y) || ($this->y> $this->z);//1
        echo '<br>';
        echo ($this->x< $this->y) || ($this->x <=$this->z);//1
        echo '<br>';
        echo ($this->x < $this->y) || ($this->x == $this->z);//1
        echo '<br>';
        echo "Conditional statement" .'<br>';
        echo 'if statement' .'<br>';
        if($this->x<$this->y){
            echo 'X is smaller then y' .'<br>';
        }
        echo 'if...else statement' .'<br>';
        if($this->x >$this->y){
            print ('X is greaten then y' .'<br>');
        }else{
            print("Y is greater then x" .'<br>');
        }
        echo 'if...else if statement' .'<br>';
        if($this->x >$this->y){
            print ('X is greaten then y and z' .'<br>');
        }else if($this->x <$this->z){
            echo 'z is greater then x and y'.'<br>';
        }
        else {
            print("Y is greater then x" . '<br>');
        }

        echo 'Switch Statements' ;
        switch ($this->r){
            case 'card':
                echo '50% discound.';
                break;
            case 'bkash':
                echo '40% discount.' ;
                break;
            case 'rocket':
                echo '30% discount.';
                break;
            default:
                echo 'Not found!';


        }
        //0r
        echo '<br>';
        switch ($this->x){
            case 10:
                echo 'This is ten';
                break;
            case 20:
                echo 'This is tweenty';
                break;
            case 30:
                echo 'This is thirty.';
                break;
        }







    }
}
?>