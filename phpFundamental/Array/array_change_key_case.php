<?php include "./header.php" ?>

<h1>Php Array Function - array change key case()</h1>

<hr>
<section class="content">

<?php
$ages = array(
    "rafi ahmed" => "21",
    "Eutika" => "22",
    "Meghla" => "23",

); 

   echo "<pre>";
   print_r((array_change_key_case($ages ,CASE_UPPER))) ;
   print_r((array_change_key_case($ages ,CASE_LOWER))) ;

 ?>
</section>

<?php include "./footer.php" ?>