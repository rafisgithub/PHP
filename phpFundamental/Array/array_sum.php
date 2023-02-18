<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function  array_sum()</h2>
    <hr>


    <?php
    //index array
    $arr = array(1,2,3,4,5,6);
    $sum = array_sum($arr);

    echo $sum;


    echo "<hr>";

    //associative array
    $arr = array(
      "a"=> "50",
      "b" => "60",
    );
    $sum = array_sum($arr);

    echo $sum;
     ?>
</section>
<?php include('./footer.php'); ?>