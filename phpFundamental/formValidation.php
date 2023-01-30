<?php 
$x = "PHP";
$fonts = "arials";
$bgcolor ="#FB043983";
$fontColor="#rafi45";
?>
 <?php

//value initialized
$name = $email = $website = $comment = $gender ="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name    = validate($_REQUEST['name']);
  $email   = validate($_REQUEST['email']);
  $website = validate($_REQUEST['website']);
  $comment = $_REQUEST['comment'];
  $gender  = validate($_REQUEST['gender']);
}

function validate($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}


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

      .content { min-height: 350px; padding: 20px;}

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

      <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']) ?>" method="post">
      <table>
        <tr>
            <td>Name  </td>
            <td><input type="text" name="name" required></td>
        </tr>
        
        <tr>
            <td>E-mail </td>
            <td><input type="email" name="email"></td>
        </tr>
        
        <tr>
            <td>Website  </td>
            <td><input type="text" name="website"></td>
        </tr>
        
        <tr>
            <td>Comment</td>
            <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
        </tr>
        
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit"></td>
        </tr>


      </table>

      </form>

      <?php 

        echo "Name :" . $name ."<br>";
        echo "Email :" . $email ."<br>";
        echo "Website :" . $website ."<br>";
        echo "Commnet :" . $comment ."<br>";
        echo "Gender :" . $gender ."<br>";

   ?>
      
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
    </section>

   </div>
  </body>
</html>