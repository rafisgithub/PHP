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
      .container { width: 600px; margin: 0 auto; background:<?php echo "#ddd" ?> }

      .header{ background:#444;<?php echo $bgcolor ?>;text-align: center; padding: 20px;}
      .footer { background:#000; color: green; text-align: center; padding: 15px;}

      .content { min-height: 400px; padding: 20px;}

      .header h2, .footer h2 { margin: 0; color: <?php  echo $fontColor?>;}

    </style>
  </head>
  <body>
    <div class="container">

      <section class="header">
        <h2>PHP Fundamentals</h2>
        <h3>Scope variable</h3>
      </section>

      <section class="content">

      <?php 

       $x = 15; //gloval variable

      function test1(){
        global $x;
        $a = 50; //local variable
        echo $a ."<br>";
        echo $x . " is access from outside of test1 function <br>";
      }
      

      function test2(){
        global $x;
        $b = 60;
        echo $b ."<br>";
        echo $x . " is access from outside of test2 function <br>";
      }

      test1();
      test2();
      
      ?>
      </section>
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
    </section>

   </div>
  </body>
</html>