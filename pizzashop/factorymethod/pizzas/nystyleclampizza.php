<?php

  require_once("../factorymethod/pizza.php");

  class NYStyleClamPizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza de almejas al estilo Nueva York");
      $this->setDough("masa fina con corteza");
      $this->setSauce("salsa marinara");
      $this->setTopping("queso reggianito");
      $this->setTopping("almejas frescas");
    }

  }

?>
