<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_diff_intersect</h2>
    <hr>


    <?php
    $array_one = array(
        "a" => "red",
        "b" =>"green",
        "c" => "blue",
        "d" => "white",
 
    );

    $array_two = array(
        "e" => "red",
        "f" =>"green",
        "g" => "blue",
    );

    $array_three = array(
        "i" => "red",
        "j" =>"white",
        "k" => "blue",
        "l" => "black",
    );

    $arrIntersect = array_intersect($array_one, $array_two, $array_three);

   echo "<pre>";
   print_r($arrIntersect);

     ?>
</section>
<?php include('./footer.php'); ?>