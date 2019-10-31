<?php

  require_once("../pizzashop/pizza.php");
  require_once("../pizzashop/nyingredientfactory.php");
  require_once("../pizzashop/chicagoingredientfactory.php");

  class VeggiePizza extends Pizza {

    // CONSTRUCTOR
    public function __construct($name, $factory) {
      $this->setName($name);
      $this->setFactory($factory);
    }

    // METODOS HEREDADOS DE PIZZA
    public function prepare() {
      echo "Preparando " . $this->getName() . ": <br>";
      $this->getFactory()->createDough();
      $this->getFactory()->createSauce();
      $this->getFactory()->createCheese();
      $this->getFactory()->createVeggies();
    }

  }

?>
