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
       
    );

    print("<pre>");
    print_r($colors);

    echo "<hr>";

    array_unshift($colors, "skyblue");

   print("<pre>");
   print_r($colors);
     ?>
</section>
<?php include('./footer.php'); ?>