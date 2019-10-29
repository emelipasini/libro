<?php

  require_once("../ducks/include.php");

  class DuckQuack implements QuackBehavior {

    // Si la clase y la funcion llevan el mismo nombre, la funcion se convierte en el constructor
    public function quack() {
      echo "Quack Quack Quack";
    }

  }

 ?>
