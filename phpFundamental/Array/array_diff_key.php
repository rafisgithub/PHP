<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_diff_key</h2>
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
        "f" => "green",
    );

    $array_three = array(
        "d" => "red",
        "h" =>"blue",
        "a" => "green",
    );


   $diff =  array_diff_key($array_one, $array_two,$array_three);

   echo "<pre>";
   print_r($diff);

     ?>
</section>
<?php include('./footer.php'); ?>