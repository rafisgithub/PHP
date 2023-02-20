<?php include('./header.php') ?>

      <section class="content">

      <?php 
      class Person{
        public $name;
        public $age;
        public function __construct($name, $age){
            echo "I'm from constructor.<br>";
            $this->name = $name;
            $this->age = $age;

        }

        public function personDetails(){
            echo "Person name is $this->name <br>";
            echo "Person Age is $this->age <br>";
        }
     
      }

     $personOne =  new Person("Rafi Ahmed", 20);
     $personOne ->personDetails();
     

      ?>
      </section>
 
<?php include('./footer.php') ?>