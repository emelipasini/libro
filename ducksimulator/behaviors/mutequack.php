<?php

  require_once("../ducksimulator/include.php");

  class MuteQuack implements QuackBehavior {
    public function quack() {
      echo ".....";
    }
  }

 ?>
