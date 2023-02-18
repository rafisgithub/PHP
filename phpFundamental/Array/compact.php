<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -compact()</h2>
    <hr>ac


    <?php
    $name = "Rafi Ahmed";
    $dep = "CSE";
    $lan = "PHP";

    $result = compact("name", "dep" , "lan");

    print("<pre>");

    print_r($result);

     ?>
</section>
<?php include('./footer.php'); ?>