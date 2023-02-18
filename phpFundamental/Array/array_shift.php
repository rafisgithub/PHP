<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_shift</h2>
    <hr>


    <?php

   $colors = array(
    "a" => "blue",
    "b" => "black",
    "c" => "white",
    "d" => "green",
);

array_shift($colors);

print("<pre>");

print_r($colors);

     ?>
</section>
<?php include('./footer.php'); ?>