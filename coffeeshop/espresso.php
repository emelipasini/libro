<?php

  require_once("beverage.php");

  class Espresso extends Beverage {

    // ATRIBUTOS
    private $description;

    // CONSTRUCTOR
    public function __construct($size) {
      $this->setDescription("Espresso");
      $this->setSize($size);
    }

    // SETTERS Y GETTERS
    public function setDescription($description) {
      $this->description = $description;
    }
    public function setSize($size) {
      $this->size = $size;
    }
    public function getSize() {
      return $this->size;
    }

    // METODOS HEREDADOS DE BEVERAGE
    public function getDescription() {
      return $this->description;
    }
    public function cost() {
      return 1.99;
    }

  }

?>
