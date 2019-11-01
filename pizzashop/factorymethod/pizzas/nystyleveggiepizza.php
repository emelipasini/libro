<?php

  require_once("../factorymethod/pizza.php");

  class NYStyleVeggiePizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza vegetariana al estilo Nueva York");
      $this->setDough("masa fina con corteza");
      $this->setTopping("salsa marinara");
      $this->setTopping("queso reggianito");
      $this->setTopping("champiñones");
      $this->setTopping("cebolla");
      $this->setTopping("pimientos");
    }

  }

?>
