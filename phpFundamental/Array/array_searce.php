<?php include("./header.php"); ?>

<section class="content">
    <h2>php fundamentals ->array_searce()</h2>


    <?php

    $colors = array(
        "a" => "blue",
        "b" => "black",
        "c" => "white",
        "d" => "green",
    );

    if(isset($_POST['color'])){

        global $txt;
        $txt = $_POST['color'];

        $result = array_search($txt, $colors);
        echo "Your have searce by $txt and your key is $result";
    }
    
    ?>

    <form action="array_searce.php" method="post">
        <input type="text" name="color" value="<?php global $txt; echo $txt ?>">
        <input type="submit" value="submt">

    </form>

</section>
<?php include('./footer.php'); ?>
