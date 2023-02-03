<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use JetBrains\PhpStorm\ExpectedValues;

    function numCheck($num){
        if($num !=5){
            throw new Exception("Num is not five");
        }
        return true;
    }

    try{
        numCheck(35);
        echo "The passing number is five";
    }catch(Exception $e){
        echo "Message:".$e->getMessage();
    }
 
     ?>
</body>
</html>