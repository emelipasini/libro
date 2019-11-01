<?php

  require_once("cheese.php");

  class ReggianoCheese extends Cheese {

    public function __construct() {
      parent::__construct();
      echo "reggianito... <br>";
    }

  }

?>
