<?php

  require_once("../abstractfactory/pizza.php");
  require_once("../abstractfactory/nyingredientfactory.php");
  require_once("../abstractfactory/chicagoingredientfactory.php");

  class ClamPizza extends Pizza {

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
      $this->getFactory()->createClam();
    }

  }

?>
