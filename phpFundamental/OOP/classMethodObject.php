<?php include('./header.php') ?>
<?php include('./function.php') ?>


<section class="content">

    <form action="" method="post">
        <table>
            <tr>
                <td>Enter the first number :</td>
                <td><input type="number" name="num1"></td>
                <td></td>
            </tr>

            <tr>
                <td>Enter the second number :</td>
                <td><input type="number" name="num2"></td>
                <td></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="calculation" value="Calculate"></td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['calculation'])){
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];

        if(empty($numOne) || empty($numTwo)){
            echo "<span style='color:red'>Field must not be empty</span><br>";
        }

        $math = new MathematicalOperation;
        echo "First number is : $numOne and the second the number is $numTwo <br>";
        $math->add($numOne, $numTwo);
        $math->subtraction($numOne, $numTwo);
        $math->multiplication($numOne, $numTwo);
        $math->division($numOne, $numTwo);
    }
    ?>

</section>
<?php include('./footer.php') ?>
