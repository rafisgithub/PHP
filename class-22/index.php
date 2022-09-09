<?php
namespace Myproject;

echo '<h1>Hello</h1>';
echo ('<h1>Hello</h1>');
print 'Hello';
print '<br>';
print ('Hello');
print '<br>';
echo ('1');
echo '<br>';
echo print ('5');
echo '<br>';

class Example{
    public $b='BMW';
    public $t='Toyota';
    public $l='Lambargini';
    public $a='<h1>Hello Rafi</h1>';

    public function test(){
        echo $c='Hello php';
        echo $a='Hello Laraval';

    }
}
$exp=new Example();
echo $exp->l;
print '<br>';
print $exp->b;
print '<br>';
$exp->test();






echo '<br>';

class Exam{
    public function tst(){
        echo $x='Hi baby';
    }
}
$XX=new Exam();
$XX->tst();
?>

