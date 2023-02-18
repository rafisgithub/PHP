<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_pad()</h2>
    <hr>


    <?php

    $arr = array("red", "green");

   $result = array_pad($arr, 5, "blue");

   print("<pre>");

   print_r($result);

     ?>
</section>
<?php include('./footer.php'); ?>