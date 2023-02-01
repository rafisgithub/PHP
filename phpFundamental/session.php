<?php 
$x = "PHP";
$fonts = "arials";
$bgcolor ="#FB043983";
$fontColor="#rafi45";

session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Fundamentals</title>
    <style>
      body{ font-family: <?php echo $fonts ?>;}
      /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
      .container { width: 700px; height:  auto; margin: 0 auto; background:<?php echo "#ddd" ?> }

      .header{ background:#444;<?php echo $bgcolor ?>;text-align: center; padding: 5px;}
      .footer { background:#000; color: green; text-align: center; padding: 15px;}

      .content { min-height: 400px; padding: 20px; }

      .header h2, .footer h2, .content h2 { margin: 0; color: <?php  echo $fontColor?>;text-align: center;}

    </style>
  </head>
  <body>
    <div class="container">

      <section class="header">
        <h1>I'm from header section</h1>
        <h2>PHP Fundamentals</h2>
        <h2>Session</h2>
      </section>

      <section class="content">
        <hr>
        <p><?php 
        date_default_timezone_set('Asia/Dhaka');
        echo date('h:i:sA'); 
        ?></p>
        <hr>

      <?php 
      $_SESSION['user'] = "Rafi Ahmed";
      $_SESSION['password'] = '1234';
      echo "UserName is " .$_SESSION['user'] ."<br>";
    //   session_unset();
      echo "Password is " .$_SESSION['password'] ."<br>";

      session_destroy();
      ?>
      
     
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
      <p style=" color:blueviolet">&copy;<?php echo date("Y") ?> Rafi Ahmed</p>
    </section>

   </div>
  </body>
</html>