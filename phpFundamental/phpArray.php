<?php 
$x = "PHP";
$fonts = "arials";
$bgcolor ="#FB043983";
$fontColor="#rafi45";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>PHP Fundamentals</title>
    <style>
      body{ font-family: <?php echo $fonts ?>;}
      /* .phpcoding { width: 600px; margin: 0 auto; background:#ddd; } */
      .container { width: 900px; height: auto; margin: 0 auto; background:<?php echo "#ddd" ?> }

      .header{ background:#444;<?php echo $bgcolor ?>;text-align: center; padding: 20px;}
      .footer { background:#000; color: green; text-align: center; padding: 15px;}

      .content { min-height: 400px; padding: 20px; }

      .header h2, .footer h2, .content h2 { margin: 0; color: <?php  echo $fontColor?>;text-align: center;}

    </style>
  </head>
  <body>
    <div class="container">

      <section class="header">
        <h1>I'm from header section</h1>
        <h2>PHP Fundamentals</h2>
        <h2>PHP Array</h2>
      </section>

      <section class="content">
        <h2>I'm from content Section</h2>
        <h1>Start PHP code here</h1>


        <?php 
        //Index Array
        echo "Index array<br>";

        $x = array(23,53,45,56,76,76,43,43);
        var_dump($x);
        echo "<br>";
        $len =count($x);

        for($i=0;$i<$len;$i++){
            echo "$x[$i]<br>";
        }

        foreach($x as $index => $y){
            echo "$index = $y <br>";
        }

        //Associative Array
        echo "Associative Array <br>";

        $ages = array(
            "rafi"=>"21",
            "shakib"=>"22",
            "rahim"=> "30",
            "piyas" =>"20",

        );
        var_dump($ages);

        foreach($ages as $name => $age){
            echo "$name = $age <br>";
        }

        //Multidimensional Array
        echo "Multidimensional Array <br>";

        $cars = array(

            array("BMW" => "$3465"),
            array("Volbo" => "$5335"),
            array("Saab" => "$66556"),
            array("labargini" =>"$3232")

        );

        var_dump($cars);
        echo "<br>";

        foreach($cars as $car){

            foreach($car as $name => $price){
                echo "$name price $price <br>";
            }
           
        }

        //another example of multidimensional array

        echo "another example of multidimensional array <br>";
        $StudentInfos = array(
            array("Rafi ahmed","CSE-150", "26A2" ),
            array("shakil rana","CSE-150", "26A2" ),
            array("Musfiq","CSE-150", "26A2" ),
            array("Afzal hossen","CSE-150", "26A2" )
        );
        // $row=count($StudentInfos);
        

        for($i=0;$i<3;$i++){

            echo "<ul>";
            for($j=0;$j<3;$j++){

                echo "<li>" . $StudentInfos[$i][$j] . "</li>";
            }
            echo "</ul>";
        }
            //Array Sorting
            echo "<hr>";
            echo "Array sorting <br>";

            $names = array ("Rakib","Rafi","Shakib","Shopon","arif","Shaown","bipul");
            $numbers = array (12,43,21,76,34,23,11,10,43,56);
        
            echo "<hr>";
             echo "<h1>without sorting <h1> <br>";

            for($i=0;$i<count($numbers);$i++){
                echo  $numbers[$i]."<br>";
            }

            echo "<hr>";
        echo "<h1> with sorting </h1> <br>";

        sort($numbers);
        for($i=0;$i<count($numbers);$i++){
            echo  $numbers[$i]."<br>";
        }

        echo "<hr>";
        echo "<h1> reverse sorting </h1> <br>";

        rsort($numbers);
        for($i=0;$i<count($numbers);$i++){
            echo  $numbers[$i]."<br>";
        }




        echo "<hr>";
        sort($names);
        echo "<ol>";
        for($i=0;$i<count($names);$i++){
            echo "<li>". $names[$i]."<br> </li>";
        }
        echo "</ol>";



        echo "<hr>";

        $ages = array (
            "rafi" => 25,
            "shakib" =>21,
            "arif" =>22,
            "bipul" =>30,

        );
        // asort($ages);
        ksort($ages);
        foreach($ages as $name=>$age){
            echo "$name". " ". "$age". "<br>";
        }

        ?>

      </section>

    <section class="footer">
      <h2>I'm from footer</h2>
    </section>

   </div>
  </body>
</html>