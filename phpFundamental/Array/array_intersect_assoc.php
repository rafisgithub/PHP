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
        "a" => "red",
        "f" =>"green",
        "d" => "blue",
    );

    $array_three = array(
        "a" => "red",
        "j" =>"white",
        "k" => "blue",
        "d" => "black",
    );

    $arrIntersect = array_intersect_assoc($array_one, $array_two, $array_three);

   echo "<pre>";
   print_r($arrIntersect);

     ?>
</section>
<?php include('./footer.php'); ?>