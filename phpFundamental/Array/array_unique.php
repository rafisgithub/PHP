<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -> array_unique()</h2>
    <hr>


    <?php

    $colors = array(
        "a" => "red",
        "b" => "gray",
        "c"=> "green",
        "d"=> "white",
        "e"=> "green",
        "f"=> "green",
        "c"=> "purple",
    );

   $result =  array_unique($colors);

   print("<pre>");
   print_r($result);
     ?>
</section>
<?php include('./footer.php'); ?>