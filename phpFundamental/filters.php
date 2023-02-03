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
        <h2>Filters</h2>
      </section>

      <section class="content">
        <hr>
        <p><?php 
        date_default_timezone_set('Asia/Dhaka');
        echo date('h:i:sA'); 
        ?></p>
        <hr>
        <table>
            <tr>
                <td>Index</td>
                <td>Filter Name</td>
                <td>Filter ID</td>
            </tr>

            <?php
            foreach (filter_list() as $index => $filter) {

                echo '<tr><td>' .$index .'</td><td>' .$filter . '</td><td>' .filter_id($filter). '</td></tr>';
            
            }


             ?>
        </table>

        <hr>
        <?php
        $str = "<h2>I am learning php. </h2>";
        echo $str;
        echo "\n";
        $newStr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newStr;
        echo "<hr>";

        $x = 50.6;
        if(filter_var($x,FILTER_VALIDATE_INT)){
            echo $x ."this is a integer.";

        }else{
            echo "it's not integer!.";

        }
        echo "<hr>";

        $ip = "127.0.0.1";
        if(filter_var($ip,FILTER_VALIDATE_IP)){
            echo $ip."this is a valid IP.";

        }else{
            echo " $ip This is not a valid IP!.";

        }
        echo "<hr>";

        $email = "smrafi@gmail.com";

        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
          echo "$email is a valid email";
        }else{
          echo "$email is not a valid email!";
        }
        echo "<hr>";

        $url = "https://www.google.com";
        if(filter_var($url,FILTER_VALIDATE_URL)){
          echo "It's valid URL.";
        }else{
          echo "It's not a valid URL\n";
        }

        echo "<hr>";

        $intNum=100;
        $min = 1;
        $max = 300;
        if(filter_var($intNum, FILTER_VALIDATE_INT ,array("options" => array("min_range" => $min, "max_range"=>$max)))){
          echo "It is in range.";

        }else{
          echo "It is not in range.";
        }

        echo "<hr>";

        $url = "https://www.google.com/index.html?q=123";

        if(filter_var($url, FILTER_VALIDATE_URL , FILTER_FLAG_QUERY_REQUIRED)){

          echo "This url is valid";
        }else{
          echo "invalid";

        }

         ?>
      
     
      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
      <p style=" color:blueviolet">&copy;<?php echo date("Y") ?> Rafi Ahmed</p>
    </section>

   </div>
  </body>
</html>