<?php include('./header.php'); ?>

<?php
if(isset($_POST['lanuages'])){
    $lang = $_POST['lanuages'];

    echo "You have selected :".$lang;
}
 ?>
<section class="content">

<form action="" method="post">
    <table>
        <tr>
            <td>Languages</td>
            <td>
                <select name="lanuages" id=""> 
                    <option>Select one</option>
                    <option value="JAVA">JAVA</option>
                    <option value="PYTHON">PYTHON</option>
                    <option value="C#">C#</option>
                    <option value="PHP">PHP</option>
                   
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="submit">
                <input type="reset" value="clear">
            </td>
        </tr>
    </table>
</form>
</section>


<?php include('./footer.php'); ?>