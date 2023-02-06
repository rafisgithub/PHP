<?php include "header.php" ?>




<section class="content">

    <h2>PHP array() Function - create array</h2>

    <h1>Array types</h1>
    <p>In PHP, there are three types of arrays:</p>
    <ul>
        <li>indexed arrays - Arrays with a numeric index.</li>
        <li>Associative arrays - Arrays with named keys.</li>
        <li>Multidimensional arrays - Arrays containing one or more arrays.</li>
    </ul>

    <?php 
    echo "Lets talk about index array<br><br>";
    $car = array ("BMW", "toyora", "Volvo"); //index Array

    $arrlen = count($car);

    for($i =0; $i<$arrlen; $i++){
        echo $car[$i]."<br>";
    }

    echo "let's talk about associative arrays<br>";

    $ages = array(
        "Rafi" => "20",
        "Arif" => "22",
        "Sadia" => "20",
        "Shakil" => "30",
    );

    foreach($ages as $key => $age){
        echo "$key = $age <br>";
    }

    // var_dump($ages);

    echo "let's talk about multidimensional arrays<br>";

    $cars = array(
        array("volvo", "10293$", "Model-220"),
        array("toyota", "10293$", "Model-243"),
        array("BMW", "10293$", "Model-340")
    );

    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $cars[$i][$j]." ";
        }
        echo "<br>";
    }


    ?>

</section>



<?php include "footer.php" ?>