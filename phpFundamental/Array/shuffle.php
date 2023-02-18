<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -shuffle()</h2>
    <hr>


    <?php

    $colors = array("red", "green", "blue", "white", "pink", "Yellow");
    print("<pre>");
    print_r($colors);

    echo "<hr>";

    shuffle($colors);

    print("<pre>");

    print_r($colors);
     ?>
</section>
<?php include('./footer.php'); ?>