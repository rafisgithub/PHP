<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function ->arsort() and asort</h2>
    <hr>


    <?php

    


    $studentsND = array(
        "rafi" => "CSE",
        "mamun" => "Biology",
        "shakib" => "Physics",
        "arif" => "Mathematics",
        "meghla" => "Artificial Inteligence",

    );
    asort($studentsND);//sort associative array in ascending order

    foreach($studentsND as $name => $department){
        echo "Name : $name Age :$department <br>";
    }

    echo "<hr>";

    $studentsNA = array(
        "rafi" => "20",
        "mamun" => "21",
        "shakib" => "22",
        "arif" => "23",
        "meghla" => "24",

    );

    arsort($studentsNA);//sort associative array in descending order

    foreach($studentsNA as $name => $age){
        echo "Name : $name Age :$age <br>";
    }






//    print("<pre>");

//    print_r($result);

//    print("</pre>")



     ?>
</section>
<?php include('./footer.php'); ?>