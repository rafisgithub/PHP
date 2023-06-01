
<?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Check if both fields are numeric
        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum";
        } else {
            echo "Please enter valid numeric values.";
        }
    }
    ?>