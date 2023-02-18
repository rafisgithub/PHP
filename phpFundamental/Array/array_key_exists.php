<?php include('./header.php') ?>

<section class="content">
    <h2 style="text-align: center;">PHP fundamentals</h2>
    <h3 style="text-align: center;">PHP function array_key_exists</h3>
    <hr>
    <?php

    $arr = array(
        "name" => "Rafi",
        "age" => "35",

    );

    if(array_key_exists("name",$arr)){
        echo "key is already exist.\n";
    }else{
        echo "key does not exist.\n";
    }
    ?>
</section>
<?php include('./footer.php') ?>