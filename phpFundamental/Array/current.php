<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -compact()</h2>
    <hr>


    <?php

    $names = array("Rafi", "Meghla", "Nurani", "Jahid");

    print("<pre>");

    print_r($names);

    print("<hr>");

   echo current($names)."<br>";
   echo next($names)."<br>";
   echo end($names)."<br>";
   echo prev($names)."<br>";

 

     ?>
</section>
<?php include('./footer.php'); ?>