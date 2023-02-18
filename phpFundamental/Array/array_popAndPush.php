<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_pad()</h2>
    <hr>


    <?php

    $arr = array("red", "green","white", "black");

    array_pop($arr);

    print("<pre>");
    print_r($arr);

    echo "<hr>";

    $arr = array("red", "green","white", "black");

    array_push($arr, "pink", "gray");

    print("<pre>");

    print_r($arr);

     ?>
</section>
<?php include('./footer.php'); ?>