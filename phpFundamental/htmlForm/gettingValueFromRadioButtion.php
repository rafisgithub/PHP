<?php include('./header.php') ?>

<?php 

if(isset($_POST['gender'])){
    $gen = $_POST['gender'];

    if($gen == "Male"){
        echo "You are a Male.";
    }else if($gen == "Female"){
        echo "you are a Female";
    }else{
        echo "others.";
    }
}
?>

<section class="content">

    <form action="" method="post">
        <table>
            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="others">Others
                </td>
            </tr>
            <tr>

                <td>
                    <input type="submit" value="submit">
                    <input type="reset" value="claer">
                </td>

            </tr>

        </table>
    </form>

</section>

<?php include('./footer.php') ?>