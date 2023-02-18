<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function ->array_values()</h2>
    <hr>


    <?php
    $colors = array(
        "a" => "red",
        "b" =>"blue",
        "c" => "green",
        "d" => "yellow",
        "f" => "purple",
    );

   $result = array_values($colors);

   print("<pre>");

   print_r($result);




     ?>
</section>
<?php include('./footer.php'); ?>