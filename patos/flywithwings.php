<?php

  require_once("flybehavior.php");

  class FlyWithWings implements FlyBehavior {
    public function fly() {
      echo "Vuelo con alas!";
    }
  }

 ?>
