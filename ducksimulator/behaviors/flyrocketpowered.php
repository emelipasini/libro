<?php

  require_once("../ducksimulator/include.php");

  class FlyRocketPowered implements FlyBehavior {
    public function fly() {
      echo "Vuelo con un cohete! <br>";
    }
  }

 ?>
