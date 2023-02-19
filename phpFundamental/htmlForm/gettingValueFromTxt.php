<?php include('.//header.php') ?>

<?php
if(isset($_POST['userName'])){
    echo "User name is ". $_POST['userName'];
}
?>

<section class="content">

<form action="" method="post" name="myForm" id="myForm">
    <table>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="userName" required></td>
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
<?php include('.//footer.php') ?>