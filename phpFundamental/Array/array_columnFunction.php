<?php include "./header.php" ?>

<h1>Php Array Function - array_column()</h1>

<hr>
<section class="content">

<?php


$name = array(
    array(
        'id' => '121',
        'first_name' => 'shakil',
        'last_name' => 'ahmed',
    ),

    array(
        'id' => '122',
        'first_name' => 'Nurani',
        'last_name' => 'tasnim',
    ),

    array(
        'id' => '123',
        'first_name' => 'meghla',
        'last_name' => 'lija',
    ),
);

$firstName = array_column($name, 'first_name');
echo "<pre>";
print_r($firstName);

$firstName = array_column($name, 'first_name','id');

echo "<pre>";
print_r($firstName);

 ?>

</section>

<?php include "./footer.php" ?>