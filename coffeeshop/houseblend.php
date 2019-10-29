<?php

  require_once("beverage.php");

  class HouseBlend extends Beverage {

    // ATRIBUTOS
    private $description;

    // CONSTRUCTOR
    public function __construct($size) {
      $this->setDescription("House Blend");
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
      return .89;
    }

  }

?>
