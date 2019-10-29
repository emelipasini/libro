<?php

  require_once("beverage.php");

  abstract class CondimentDecorator extends Beverage {

    // ATRIBUTOS
    private $beverage;

    // METODOS HEREDADOS DE BEVERAGE
    public function getDescription() {}
    public function cost() {}
    public function getSize() {}

  }

?>
