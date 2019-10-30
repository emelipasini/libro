<?php

  require_once("condimentdecorator.php");

  class Milk extends CondimentDecorator {

    // ATRIBUTOS
    private $beverage;

    // CONSTRUCTOR
    public function __construct(Beverage $beverage) {
      $this->setBeverage($beverage);
    }

    // SETTERS Y GETTERS
    public function setBeverage(Beverage $beverage) {
      $this->beverage = $beverage;
    }
    public function getBeverage() {
      return $this->beverage;
    }
    public function getSize() {
      return $this->getBeverage()->getSize();
    }

    // METODOS HEREDADOS DE BEVERAGE
    public function getDescription() {
      return $this->getBeverage()->getDescription() . ", Milk";
    }
    public function cost() {
      switch ($this->getBeverage()->getSize()) {
        case '1':
          return .05 + $this->getBeverage()->cost();
          break;
        case '2':
          return .10 + $this->getBeverage()->cost();
          break;
        case '3':
          return .15 + $this->getBeverage()->cost();
          break;
      }
    }

  }

?>
