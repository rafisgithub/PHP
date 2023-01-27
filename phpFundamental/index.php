<?php 
$x = "PHP";
$fonts = "arials";
$bgcolor ="#FB043983";
$fontColor="#rafi45";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Fundamentals</title>
    <style>
      body{ font-family: <?php echo $fonts ?>;}
      /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
      .phpcoding { width: 600px; margin: 0 auto; background:<?php echo "#ddd" ?> }

      .header, .footer{ background:#444;<?php echo $bgcolor ?>;text-align: center; padding: 20px; }

      .content { min-height: 400px; padding: 20px;}

      .header h2, .footer h2 { margin: 0; color: <?php  echo $fontColor?>;}

    </style>
  </head>
  <body>
    <div class="phpcoding">

      <section class="header">
        <h2>PHP Fundamentals</h2>
      </section>

  <section class="content">
      <!-- php syntax -->
        <?php

         echo "I love $x";
         echo "<br>";
         $x=10;
         $y=20;
         $sum=$x+$y;
         echo "Sum is two numbers =". $sum;
         
         echo "<br> php is server side language";
         //echo can take multiple parameter but print can't additionally print has return type but echo has no return type
         echo "<br>","Rafi " , "Ahmed" , " is " , "good" , "boy";
         echo "<br>";
         print "php full form personal home page";
         //chacking data type
         $x = "rafi";
         echo "<br>";
         var_dump($x);
         echo "<br>";
        $y= print " ahmed ";
        var_dump($y);
        echo "<hr>";
        echo " PHP data type";
        echo "<hr>";
        echo "1.String";
        echo "<br>2.integer ";
        echo "<br>3.float ";
        echo "<br>4.Boolean"; 
        echo "<br>5.Array ";
        echo "<br>6.Object ";
        echo "<br>7.Null";
        echo "<br>8.Resource";
        echo "<hr>";
        $name ="Rafi Ahmed"; //String
        echo $name ."is an example of string <br>";
        $x = 10;//interger
        echo $x ." is an  example of integer <br>";
        $x = 3.1416;
        echo $x ." is an example of float <br> ";
        $x = true; //boolean
        $y = false;
        echo $x ." is an example of boolean <br>";
        echo $y. " is an example of boolean <br>";
        var_dump($y);
        echo "<br>";

        //Array
        $x = array("Rafi Ahmed", "CSE-20202312","26A2");
        var_dump($x);
        echo "<br>". $x[0] ."<br>";

        //object
        class Students{ 

                  function department(){
                   return "Physics";
                  }
                  function details(){
                    echo $this->department();
                  }
        }

        $studentInfo =new Students;
        $studentInfo->details();
        echo "<br>";


        //NULL
        $x = NULL;
        var_dump($x);
        echo "<br>";


        //Resource 
        echo "In PHP, Resource is a special data type that refers to any external resource <br>";
        

        

         ?>
  </section>

    <section class="footer">
      <h2>www.php.com</h2>
    </section>

   </div>
  </body>
</html>