<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -Array_diff</h2>
    <hr>


    <?php
    $array_one = array(
        "a" => "red",
        "b" =>"blue",
        "c" => "green",
        "d" => "yellow",
        "f" => "purple",
    );

    $array_two = array(
        "a" => "red",
        "b" =>"blue",
        "c" => "green",
    );

    $array_three = array(
        "a" => "black",
        "b" =>"white",
        "c" => "green",
        "d" => "pink",
    );

   $diff =  array_diff($array_one, $array_two, $array_three);

   echo "<pre>";
   print_r($diff);

     ?>
</section>
<?php include('./footer.php'); ?>