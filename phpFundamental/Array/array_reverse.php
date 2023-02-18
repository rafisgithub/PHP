<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_pop() and array_push()</h2>
    <hr>


<section class="content">
    <hr>
    <h2>PHP array() Function -array_pop() and array_push()</h2>
    <hr>


    <?php

    $colors = array("red", "gray", "ash", "black", "white");

    $result = array_reverse($colors);

    print("<pre>");
    print_r($result);


    echo "<hr>";


    
    $colors = array(
         "a" => "red",
         "b" => "gray", 
         "c"=> "ash", 
         "c"=> "black", 
         "d"=> "white");

    $result = array_reverse($colors);

    print("<pre>");
    print_r($result);
     ?>
</section>
<?php include('./footer.php'); ?>
?