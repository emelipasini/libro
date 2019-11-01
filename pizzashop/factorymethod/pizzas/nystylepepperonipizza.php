<?php

  require_once("../factorymethod/pizza.php");

  class NYStylePepperoniPizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza de pepperonis al estilo Nueva York");
      $this->setDough("masa fina con corteza");
      $this->setTopping("salsa marinara");
      $this->setTopping("queso reggianito");
      $this->setTopping("champiñones");
      $this->setTopping("cebolla");
      $this->setTopping("pimiento");
      $this->setTopping("pepperonis");
    }

  }

?>
