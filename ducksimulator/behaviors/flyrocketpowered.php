<?php

  require_once("../ducks/include.php");

  class FlyRocketPowered implements FlyBehavior {
    public function fly() {
      echo "Vuelo con un cohete! <br>";
    }
  }

 ?>
