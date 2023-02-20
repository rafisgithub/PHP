<?php include('./header.php') ?>

      <section class="content">

      <?php

      class userData{

        public $user;
        public $userId;

        public function __construct($u, $ui)
        {
            $this->user = $u;
            $this->userId = $ui;
            echo "User name is $this->user and user ID is $this->userId <br>";
        }

        public function __destruct()
        {
            echo "I'm from destructor.\n";
            unset($this->user);
            unset($this->userId);
        }
      }
     $user = "Rafi Ahmed";
     $id = "150";
      $obj = new userData($user, $id);


      ?>
      </section>
 
<?php include('./footer.php') ?>