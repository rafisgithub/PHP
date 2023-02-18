<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_multisort()</h2>
    <hr>


    <?php


$arr_one = array("Dog", "Cat", "Horse", "Bear" , "Ass");
$arr_two = array("Lion", "Tiger", "Goat","Cat");

array_multisort($arr_one);

array_multisort($arr_two);


print("<pre>");
print_r($arr_one);

echo "\n";

print("<pre>");
print_r($arr_two);

     ?>
</section>
<?php include('./footer.php'); ?>