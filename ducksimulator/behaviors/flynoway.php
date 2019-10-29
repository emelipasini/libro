<?php

  require_once("../ducks/include.php");

  class FlyNoWay implements FlyBehavior {
    public function fly() {
      echo "No puedo volar";
    }
  }

 ?>
