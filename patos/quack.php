<?php

  require_once("quackbehavior.php");

  class Quack implements QuackBehavior {
    public function quack() {
      echo "Quack Quack Quack";
    }
  }

 ?>
