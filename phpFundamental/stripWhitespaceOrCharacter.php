<?php 
$txtError= " ";
$txt = " ";

if(isset($_POST['txt'])){
    if(empty($_POST['txt'])){
        $txtError = "input field is required!";
    }else{
        $txt = $_POST['txt'];
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php fundamentals</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        <?php include "./style.css"; ?>
    </style>
</head>
<body>
    <div class="container">

        <section class="header">
            <h2>PHP fundamentals</h2>
            <p>Case change</p>
            <h2 class="time">
                <?php
                date_default_timezone_set('Asia/Dhaka');
                echo "Time:".date('h:i:s A');
                 ?>
            </h2>
        </section>

        <section class="content">

        <div>
        <form action="stripWhitespaceOrCharacter.php" method="post" class="pt-5">
            <input class="inputField" type="text" name="txt" value="<?php echo $txt; ?>"> <span style="color:red"><?php echo $txtError; ?></span>
            <input type="submit" value=" Submit">
        </form>
        </div>

      <br>

       <p>
   
       <?php
       echo trim($txt, " .")."<br>";
       echo ltrim($txt, " .")."<br>";
       echo rtrim($txt, " .")."<br>";

        ?>
  
       </p>
           
        </section>

        <section class="footer">
            <h2>I'm from footer section</h2>
        </section>

    </div>
</body>
</html>