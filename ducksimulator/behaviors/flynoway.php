<?php

  require_once("../ducksimulator/include.php");

  class FlyNoWay implements FlyBehavior {
    public function fly() {
      echo "No puedo volar";
    }
  }

 ?>
