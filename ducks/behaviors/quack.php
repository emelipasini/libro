<?php

  require_once("../ducks/include.php");

  class Quack implements QuackBehavior {

    public function quack() {
      echo "Quack Quack Quack";
    }
    
  }

 ?>
