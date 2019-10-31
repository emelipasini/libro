<?php

  require_once("nyingredientfactory.php");
  require_once("chicagoingredientfactory.php");

  abstract class Pizza {

    // ATRIBUTOS
    private $name;
    private $dough;
    private $sauce;
    private $veggies = [];
    private $cheese;
    private $pepperoni;
    private $clam;
    private $factory;

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
    public function setVeggie($veggie) {
      $veggies = $this->getVeggies();
      $this->veggies[] = $veggie;
    }
    public function getVeggies() {
      return $this->veggies;
    }
    public function setCheese($cheese) {
      $this->cheese = $cheese;
    }
    public function getCheese() {
      return $this->cheese;
    }
    public function setPepperoni($pepperoni) {
      $this->pepperoni = $pepperoni;
    }
    public function getPepperoni() {
      return $this->pepperoni;
    }
    public function setClam($clam) {
      $this->clam = $clam;
    }
    public function getClam() {
      return $this->clam;
    }
    public function setFactory($factory) {
      if ($factory == "NY") {
        $this->factory = new NYIngredientFactory();
      }
      else if ($factory == "CH") {
        $this->factory = new ChicagoIngredientFactory();
      }
    }
    public function getFactory() {
      return $this->factory;
    }

    // METODOS
    abstract public function prepare();
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
