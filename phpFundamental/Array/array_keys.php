<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_key()</h2>
    <hr>



    <?php
        $cars = array(
            "volbo" => "XW-32",
            "BMW" => "W-34",
            "toyota" => "Highlander",
            
        );
        print("<pre>");
        print_r($cars);
        
        echo "\n";

        $result = array_keys($cars);

        printf("<pre>");
       print_r($result);
       echo "\n";

      
       $result = array_keys($cars, "XW-32");
       echo "<pre>";
       print_r($result);



     ?>
</section>
<?php include('./footer.php'); ?>