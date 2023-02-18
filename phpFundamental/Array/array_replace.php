<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_pop() and array_push()</h2>
    <hr>


    <?php

    $color_one = array("red", "gray");
    $color_two = array("blue","pink");

    $result = array_replace($color_one,$color_two);

    print("<pre>");
    print_r($result);

    echo "<hr>";

    $color_one = array("a" => "red", "b" => "gray", "c" => "skyblue");

    $color_two = array("a" => "blue", "b" => "pink");

    $result = array_replace($color_one,$color_two);

    print("<pre>");
    print_r($result);

     ?>
</section>
<?php include('./footer.php'); ?>