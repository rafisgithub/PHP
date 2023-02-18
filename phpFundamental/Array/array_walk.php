<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function ->array_values()</h2>
    <hr>


    <?php

    function myFunction($department, $name){
        echo "$name comes from $department <br>";
    }

    $students = array(
        "rafi" => "CSE",
        "mamun" => "Biology",
        "shakib" => "Physics"
    );

    array_walk($students, "myFunction")

//    print("<pre>");

//    print_r($result);

//    print("</pre>")



     ?>
</section>
<?php include('./footer.php'); ?>