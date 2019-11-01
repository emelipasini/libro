<?php

  require_once("../factorymethod/pizza.php");

  class ChicagoStyleVeggiePizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza vegetariana al estilo Chicago");
      $this->setDough("masa extra gruesa con corteza");
      $this->setSauce("salsa de tomate");
      $this->setTopping("queso mozzarella");
      $this->setTopping("queso parmesano");
      $this->setTopping("berenjenas");
      $this->setTopping("espinaca");
      $this->setTopping("aceitunas negras");
    }

    // METODOS PISADOS
    public function cut() {
      echo "Cortando en porciones cuadradas... <br>";
    }

  }

?>
