<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function  array_slice</h2>
    <hr>


    <?php

//    $colors = array(
//     "a" => "blue",
//     "b" => "black",
//     "c" => "white",
//     "d" => "green",
// );
$colors = array("red", "blue", "black", "white","green");

$result = array_slice($colors, 3);

print("<pre>");

print_r($result);

echo "<hr>";

$colors = array("red", "blue", "black", "white","green");

$result = array_slice($colors, 1,3); //range

print("<pre>");

print_r($result);

     ?>
</section>
<?php include('./footer.php'); ?>