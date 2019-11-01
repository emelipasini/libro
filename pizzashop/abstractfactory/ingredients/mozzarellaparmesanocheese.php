<?php

  require_once("cheese.php");

  class MozzarellaParmesanoCheese extends Cheese {

    public function __construct() {
      parent::__construct();
      echo "mozzarella... <br>";
      parent::__construct();
      echo "parmesano... <br>";
    }

  }

?>
