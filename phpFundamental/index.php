<?php 
$fonts = "arial";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Fundamentals</title>
    <style>
      /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
      .phpcoding { width: 600px; margin: 0 auto; background:<?php echo "#ddd" ?> }

      .header, .footer{ background:#444;color: #fff;text-align: center; padding: 20px; }

      .content { min-height: 400px;}

      .header h2, .footer h2 { margin: 0; }

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
        $a = 5;
        
         echo "I love php";
         echo $fonts;
         ?>
  </section>

    <section class="footer">
      <h2>www.php.com</h2>
    </section>

   </div>
  </body>
</html>