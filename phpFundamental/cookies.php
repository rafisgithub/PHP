<?php 
$x = "PHP";
$fonts = "arials";
$bgcolor ="#FB043983";
$fontColor="#rafi45";

// session_start();
setcookie('visitors' , "" , time()-3600);
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
        <h2>Cookies</h2>
      </section>

      <section class="content">
        <hr>
        <p><?php 
        date_default_timezone_set('Asia/Dhaka');
        echo date('h:i:sA'); 
        ?></p>
        <hr>


        <?php 
      if(!isset($_COOKIE['visitors'])){
            
    setcookie("Visitors", "1" , time()+86400, "/" or die("Could not set cookie!"));
    echo "This is your first visit in this website..";

      }else{
        echo "You are our okd visitor.";
      }

      echo "cookie deleted";

      ?>

      <?php 

      ?>
      
     
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
      <p style=" color:blueviolet">&copy;<?php echo date("Y") ?> Rafi Ahmed</p>
    </section>

   </div>
  </body>
</html>