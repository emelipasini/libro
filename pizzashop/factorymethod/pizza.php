<?php

  abstract class Pizza {

    // ATRIBUTOS
    private $name;
    private $dough;
    private $sauce;
    private $toppings = [];

    // SETTERS Y GETTERS
    public function setName($name) {
      $this->name = $name;
    }
    public function getName() {
      return $this->name;
    }
    public function setDough($dough) {
      $this->dough = $dough;
    }
    public function getDough() {
      return $this->dough;
    }
    public function setSauce($sauce) {
      $this->sauce = $sauce;
    }
    public function getSauce() {
      return $this->sauce;
    }
    public function setTopping($topping) {
      $toppings = $this->getToppings();
      $this->toppings[] = $topping;
    }
    public function getToppings() {
      return $this->toppings;
    }

    // METODOS
    public function prepare() {
      echo "Preparando " . $this->getName() . ": <br>";
      echo "Peparando la " . $this->getDough() . "... <br>";
      echo "Agregando la " . $this->getSauce() . "... <br>";
      $toppings = $this->getToppings();
      foreach ($toppings as &$topping) {
        echo "Agregando " . $topping . "... <br>";
      }
    }
    public function bake() {
      echo "Horneando por 25 minutos... <br>";
    }
    public function cut() {
      echo "Cortando en porciones triangulares... <br>";
    }
    public function box() {
      echo "Poniendo la pizza en una caja oficial... <br>";
    }

  }

?>
