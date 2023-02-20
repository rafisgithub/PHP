<?php include('./header.php') ?>

<section class="content">
    <?php

    class Student{
       public $name;
       public $age;
       public $id;

       public function __construct($name , $age, $id) {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        
       }

       public function __destruct()
       {
       if(!empty($this->id || $this->name or $this->age)){
        echo "Saving information";
       }
       }

    }

    $obj = new Student("Rfai Ahmed",21,150);

    unset($obj);
    
    ?>
</section>

<?php include('./footer.php') ?>
