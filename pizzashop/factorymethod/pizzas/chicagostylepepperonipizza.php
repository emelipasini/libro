<?php

  require_once("../factorymethod/pizza.php");

  class ChicagoStylePepperoniPizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza de pepperonis al estilo Chicago");
      $this->setDough("masa extra gruesa con corteza");
      $this->setSauce("salsa de tomate");
      $this->setTopping("queso mozzarella");
      $this->setTopping("queso parmesano");
      $this->setTopping("berenjenas");
      $this->setTopping("espinaca");
      $this->setTopping("aceitunas negras");
      $this->setTopping("pepperonis");
    }

    // METODOS PISADOS
    public function cut() {
      echo "Cortando en porciones cuadradas... <br>";
    }

  }

?>
