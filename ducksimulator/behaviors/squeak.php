<?php

  require_once("../ducksimulator/include.php");

  class Squeak implements QuackBehavior {
    public function quack() {
      echo "Squeak Squeak";
    }
  }

 ?>
