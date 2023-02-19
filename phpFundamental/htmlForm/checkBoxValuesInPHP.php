<?php include('./header.php') ?>

<?php 
if(isset($_POST['submit'])){
    $languages = $_POST['Language'];

    echo "You have selected : \n";
    foreach($languages as $value){
        echo $value .",";
    }
}
?>

<section class="content">
    <form  action="" method="post">
        <table>
            <tr>
                <td>Language:</td>
                <td>
                    <input type="checkbox" name="Language[]" value="PHP">PHP
                    <input type="checkbox" name="Language[]" value="CPP">CPP
                    <input type="checkbox" name="Language[]" value="C">C
                </td>
            </tr>
            <tr>

                <td>
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" value="claer">
                </td>

            </tr>

        </table>
    </form>

</section>

<?php include('./footer.php') ?>