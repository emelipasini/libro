<?php

  require_once("../ducksimulator/include.php");

  class DuckQuack implements QuackBehavior {

    // Si la clase y la funcion llevan el mismo nombre, la funcion se convierte en el constructor
    public function quack() {
      echo "Quack Quack Quack";
    }

  }

 ?>
