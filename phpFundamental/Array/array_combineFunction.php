<?php include "./header.php" ?>

<h1>Php Array Function - array_combine()</h1>

<hr>
<section class="content">

<?php

$name = array(" Rafi ","Shakib","Meghla",);
$department = array("CSE","Math","AI",);

$combine = array_combine($name, $department);


print("<pre>");
var_dump($combine) ."<br>";
var_export($combine) ."<br>";
print_r($combine)."<br>";


print("<pre>");
 ?>

</section>

<?php include "./footer.php" ?>