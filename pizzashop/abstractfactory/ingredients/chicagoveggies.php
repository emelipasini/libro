<?php

  require_once("veggies.php");

  class ChicagoVeggies extends Veggies {

    public function __construct() {
      parent::__construct();
      echo "las berenjenas, la espinaca y las aceitunas negras... <br>";
    }

  }

?>
