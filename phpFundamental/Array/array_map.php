<?php include "./header.php" ?>

<h1>Php Array Function - array_map()</h1>

<hr>
<section class="content">

<?php

function myFunction($value){
   return $value+$value;
}

$arr = array(1, 2, 3, 4, 5);

$result = array_map("myFunction", $arr);

print("<pre>");
print_r($result);


echo "<hr>";



function myFunction1($value){

    $v = strtoupper($value);

    return $v;
}

$arr = array(
    "Animal" => "Tiger",
    "Type" => "Mammalia",
);

$result1 = array_map("myFunction1",$arr);

print("<pre>");
print_r($result1);


 ?>
</section>

<?php include "./footer.php" ?>