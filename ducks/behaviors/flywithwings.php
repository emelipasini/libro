<?php

  require_once("../ducks/include.php");

  class FlyWithWings implements FlyBehavior {
    public function fly() {
      echo "Vuelo con alas!";
    }
  }

 ?>
