<?php include('./header.php') ?>

      <section class="content">

      <?php 
      class Person{
        public $name;
        public $age = 22;

        public function personName(){
           
            echo "Person name is " . $this->name ."<br>";
        }

        public function personAge($age){
            $this->age = $age;
            echo "Perosn age is " . $this->age;
        }
      }

     $personOne =  new Person;
    $personOne->name = "Rafi Ahmed";
    $personOne->personName();
    $personOne->personAge(20);
     

      ?>
      </section>
 
<?php include('./footer.php') ?>