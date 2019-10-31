<?php

  require_once("../ducksimulator/include.php");

  class FlyWithWings implements FlyBehavior {
    public function fly() {
      echo "Vuelo con alas!";
    }
  }

 ?>
