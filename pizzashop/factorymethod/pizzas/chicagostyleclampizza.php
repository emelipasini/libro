<?php

  require_once("../factorymethod/pizza.php");

  class ChicagoStyleClamPizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza de almejas al estilo Chicago");
      $this->setDough("masa extra gruesa con corteza");
      $this->setSauce("salsa de tomate");
      $this->setTopping("queso mozzarella");
      $this->setTopping("queso parmesano");
      $this->setTopping("almejas");
    }

    // METODOS PISADOS
    public function cut() {
      echo "Cortando en porciones cuadradas... <br>";
    }

  }

?>
