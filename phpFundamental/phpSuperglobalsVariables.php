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
        <h3>HP superglobal variables</h3>

      </section>

      <section class="content">

      <ul>
        <h1>PHP Super Golbals Variables are :--</h1>
        <li>$GLOBALS</li>
        <li>$_SERVER</li>
        <li>$_REQUEST</li>
        <li>$_POST</li>
        <li>$_GET</li>
        <li>$_FILES</li>
        <li>$_ENV</li>
        <li>$_COOKIE</li>
        <li>$_SESSION</li>
      </ul>

      <?php 

    //   $GLOBALS
      $x =12;
      $y= 34;

      function sum(){

        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

      }
      sum();
      echo $z."<br>";


    //   $_SERVER

    echo $_SERVER['PHP_SELF'] ."<br> <hr>";
    echo $_SERVER['SERVER_NAME'] ."<br> <hr>";
    echo $_SERVER['SCRIPT_NAME'] ."<br> <hr>";
    echo $_SERVER['HTTP_USER_AGENT'] ."<br> <hr>";
    echo $_SERVER['SERVER_ADDR'] ."<br> <hr>";



    // $_REQUEST and $_POST

    echo "<h1>". "REQUEST and POST" ." </h1> <hr> ";
      
      ?>

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="">User Name:</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
      </form>

      <?php
      if($_SERVER["REQUEST_METHOD"]== "POST"){
        $name = $_REQUEST['username'];
        // $name = $_POST['username'];
        if(empty($name)){
            echo "<span style='color:red'> username field is required!</span>";
        }else{
            echo "<span style='color:green'> You name is $name</span>";
        }
      }
     
       ?>
       <hr>

       <a href="text.php?msg=Good&txt=Bye">Send Data</a>

       

      
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
    </section>

   </div>
  </body>
</html>