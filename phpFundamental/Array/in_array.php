<?php include("./header.php"); ?>

<section class="content">
    <hr>
    <h2>PHP array() Function -in_array()</h2>
    <hr>


    <?php

    $coders = array("Rafi", "Meghla", "Nurani");

    if(isset($_POST['userName'])){
        global $name;
        $name = $_POST['userName'];


        if(in_array($name, $coders)){
            echo "$name is exist.";
        }else{
            echo "$name is not exist.";
        }
    }

     ?>

     <form action="in_array.php" method="post">
        <input type="text" name="userName">
        <input type="submit" value="submit">
     </form>
</section>
<?php include('./footer.php'); ?>