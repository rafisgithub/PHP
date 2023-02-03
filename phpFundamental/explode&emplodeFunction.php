<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php fundamentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        <?php include "./style.css"; ?>
    </style>
</head>
<body>
    <div class="container">

        <section class="header">
            <h2>PHP fundamentals</h2>
            <p>explode() and emplode() function</p>
            <h2 class="time">
                <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time:".date('h:i:s A');
                 ?>
            </h2>
        </section>

        <section class="content">
            
            <?php 
           
           $myStr = "We are php developer";

           $str = explode(" ", $myStr);

           var_dump($str);
           echo "<br>";

           var_export($str);
           echo "<br>";

           print_r($str);
           echo "<br>";

           echo $myStr;
           echo "<br>";
           
           echo $str[0];

           echo "<hr>";

           $myStr = array("We", "are" , "learning", "PHP");
           $str = implode(" ", $myStr);
           echo $str."<br>";
           var_dump($str);
            ?>
        </section>

        <section class="footer">
            <h2>I'm from footer section</h2>
        </section>

    </div>
</body>
</html>