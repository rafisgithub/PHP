<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -array_merge()</h2>
    <hr>


    <?php
    $arr1 = array("red", "green");
    $arr2 = array("blue", "white");

    $reuslt = array_merge($arr1, $arr2);

    print("<pre>");
    print_r($reuslt);

    echo "<hr>";


    $arr1 = array (
        "a" => "red",
        "b" => "green",
    );

    $arr2 = array(
        "c" => "blue",
        "b" => "white",
    );

    $reuslt = $arr1+ $arr2;
    print("<pre>");
    print_r($reuslt);



     ?>
</section>
<?php include('./footer.php'); ?>