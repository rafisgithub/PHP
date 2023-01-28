<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php function</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }
       .container{width: 900px;background-color:#999; margin: 0 auto;}

       .header {background:  #d1abca; height:70px; text-align: center;}

       .content { background: #9e6d64; height: 900px; text-align: center; }

       .footer {background-color: #a1478f; height:50px; text-align: center;}
       .header h1,h2 { margin: 0px;}
       .footer h4,h5 { margin: 0px;}

       .content h1 {margin: 0px; padding: 20px;}

    </style>
</head>
<body>
    <div class="container">

        <section class="header">
            <h1>I'm from header</h1>
            <h2>start PHP Functions</h2>
        </section>

        <section class="content">
            <h1>I'm form main content</h1>

            <?php 
            echo "PHP function <br>";
            //no arguments no return value
            echo "no arguments no return value <br>";
            function sum(){
                $x=10;
                $y=20;
                $sum=$x+$y;
                echo "Sum is = $sum<br>";
            }
            sum();

            //with arguments no return value
            echo "with arguments no return value <br>";
            function studentInfo($name,$roll,$sn){
                echo "Name: $name <br>";
                echo "Roll: $roll <br>";
                echo "School name: $sn <br>";
            }
            studentInfo('Rafi Ahmed', 'CSE-150','Sonargaon University');


            //no argument with return value
            echo "no argument with return value <br>";
            function myFunction(){
                $x=20;
                $y=30;
                return $x*$y;
            }
          $m= myFunction();
           echo "$m <br>";


           //with argument with return value 
           echo "with argument with return value  <br>";
           function subtraction($x,$y){
            return $x-$y;
           }
           echo subtraction(30,10) ."<br>";
           echo subtraction(40,10) ."<br>";
           echo subtraction(50,10) ."<br>";
           echo subtraction(60,10) ."<br>";




        
          
            ?>
        </section>

        <section class="footer">
            <h4>I'm from footer</h4>
            <h5>End php Function</h5>
        </section>
    </div>
</body>
</html>