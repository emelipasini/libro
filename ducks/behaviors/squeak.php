<?php

  require_once("../ducks/include.php");

  class Squeak implements QuackBehavior {
    public function quack() {
      echo "Squeak Squeak";
    }
  }

 ?>
