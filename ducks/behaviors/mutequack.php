<?php

  require_once("../ducks/include.php");

  class MuteQuack implements QuackBehavior {
    public function quack() {
      echo ".....";
    }
  }

 ?>
