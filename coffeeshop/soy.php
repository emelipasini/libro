<?php

  require_once("condimentdecorator.php");

  class Soy extends CondimentDecorator {

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

    // METODOS HEREDADOS DE BEVERAGE
    public function getDescription() {
      return $this->getBeverage()->getDescription() . ", Soy";
    }
    public function cost() {
      switch ($this->getBeverage()->getSize()) {
        case '1':
          return .10 + $this->getBeverage()->cost();
          break;
        case '2':
          return .15 + $this->getBeverage()->cost();
          break;
        case '3':
          return .20 + $this->getBeverage()->cost();
          break;
      }
    }

  }

?>