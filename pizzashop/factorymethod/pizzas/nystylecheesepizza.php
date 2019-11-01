<?php

  require_once("../factorymethod/pizza.php");

  class NYStyleCheesePizza extends Pizza {

    // COSNTRUCTOR
    public function __construct() {
      $this->setName("pizza de queso al estilo Nueva York");
      $this->setDough("masa fina con corteza");
      $this->setSauce("salsa marinara");
      $this->setTopping("queso reggianito");
      $this->setTopping("ajo");
    }

  }

?>
