<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -in_array()</h2>
    <hr>


    <?php

    $coders = array("Rafi", "Meghla", "Nurani");

   
    echo "The current position key is :".key($coders)."<br>";
    next($coders);
    echo "The next position key is :".key($coders);
    echo "<hr>";
    $programmers = array(
        "rafi" => "22",
        "Shakib" => "23",
        "Meghla" => "15",

    );
    ksort($programmers);

    foreach($programmers as $name => $age){

        echo "Nmae: $name and Age : $age <br>";
    }

    ?>
</section>
<?php include('./footer.php'); ?>