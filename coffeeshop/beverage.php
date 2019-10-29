<?php

  abstract class Beverage {

    // ATRIBUTOS
    private $description;
    private $cost;
    private $size;

    // METODOS
    public function getDescription() {
      return $this->description;
    }
    public function cost() {
      return $this->cost;
    }
    public function getSize() {
      return $this->size;
    }

  }

?>
