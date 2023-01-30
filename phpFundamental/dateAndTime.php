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
       .container{width: 900px;background-color:#444; margin: 0 auto;}

       .header {background:  #444; height:70px; text-align: center;}

       .content { background: #555; height: 900px; text-align: center; }

       .footer {background-color: #666; height:50px; text-align: center;}
       .header h1,h2 { margin: 0px;}
       .footer h4,h5 { margin: 0px;}

       .content h1 {margin: 0px; padding: 20px;}
       p{margin: 0;}

    </style>
</head>
<body>
    <div class="container">

        <section class="header">
            <span style="float: right;">
            <?php date_default_timezone_set('Asia/Dhaka');
            echo "Time: " .date("h:i:sa");
            ?>
            </span>
            
            <h5>PHP Date and Time</h5>
        </section>

       <section class="content">
        <hr>
        <?php 
         echo "Today is ". date("d/m/y") ."<br>";
         echo "Time: " .date("h:i:sa") ."<br>";

         date_default_timezone_set('Asia/Dhaka');
         echo "Time: " .date("h:i:sa") ."<br>";

         echo date_default_timezone_get();

        ?>
       </section>

        <section class="footer">
            <h4>I'm from footer</h4>
           <p>&copy;<?php echo date("Y") ?> all right reserved Rafi Ahmed</p>
        </section>
    </div>
</body>
</html>