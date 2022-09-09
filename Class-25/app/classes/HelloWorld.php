<?php
namespace App\classes;
class HelloWorld{
    public $array_1;
    public $array_2;
    public $students_1;
    public $students_2;

    public function __construct()
    {
        //This is Numeric Array
        $this->array_1=array(12,43,54);
        //This is Associative array
        $this->array_2=array(
            'a'=>32,
            'b'=>34,
            'c'=>"Rafi"
        );
        $this->students_1=[
            ['Name'=>'Rafi Ahmed',
            'Email'=>'smrafi120@gmail.com',
            'Phone'=>012323323232
            ],
            ['Name'=>'Rafi Ahmed',
                'Email'=>'smrafi120@gmail.com',
                'Phone'=>012323323232
            ]
            ];
        $this->students_2=[
            ['Name'=>'Meghla',
            'Email'=>'megla@gmail.com',
            'Phone'=>[
                'No-1'=>'0192929929',
                'No-2'=>'019283838',
                'No-3'=>'01348488484'
            ]
            ],
            ['Name'=>'Nurani',
                'Email'=>'nurani@gmail.com',
                'Phone'=>'01488373734'
            ]
        ];


    }
    public function index(){
        //Numeric Array
        echo '<h1 style="color: darkorange">Arrya types Single and Nested'.'<br>'.'This is a single array example</h1>';
        echo '<h1>This is Numeric Array</h1>';
        print_r($this->array_1);
        echo '<br>';
        var_dump($this->array_1);
        echo '<Pre>';
       print_r($this->array_1);
       var_dump($this->array_1);

       //Associative Array
        echo '<h1>This is Associative Array</h1>';
        print_r($this->array_2);
        var_dump($this->array_2);
        echo '<h1>This is Nested Array Example</h1>';
       print_r($this->students_1);
       var_dump($this->students_1);


//       foreach ($this->students_1 as $value){
//           foreach ($value as $key=>$item){
//               echo $key.'=>'.$item .' '.'<br>';
//           }
//       }


       echo '<h1>Students-2 DATA.</h1>';
       print_r($this->students_2);
       var_dump($this->students_2);


//       foreach ($this->students_2 as $value){
//           foreach ($value as $key=>$item){
//               if(is_array($item)){
//                   foreach ($item as $key=>$v_item){
//                       echo $key.'=>'.$v_item .'<br>';
//                   }
//               }else{
//                   echo $key.'=>'.$item.'<br>';
//               }
//           }
//           echo '<br>';
//       }

        foreach($this->students_2 as $value){
            foreach ($value as $key=>$item){
                if(is_array($item)){
                    foreach ($item as $key=>$v_item){
                        echo $key.$v_item.'<br>';
                    }
                }else{
                    echo $key.$item .'<br>';
                }
            }
        }


    }
}

?>