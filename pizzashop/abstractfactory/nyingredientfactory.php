<?php

  require_once("ingredientfactory.php");
  require_once("ingredients/thincrustdough.php");
  require_once("ingredients/marinarasauce.php");
  require_once("ingredients/reggianocheese.php");
  require_once("ingredients/nyveggies.php");
  require_once("ingredients/freshclam.php");
  require_once("ingredients/pepperoni.php");

  class NYIngredientFactory implements IngredientFactory {

    // METODOS HEREDADOS DE INGREDIENT FACTORY
    public function createDough() {
      $pizza = new ThinCrustDough();
      return $pizza;
    }
    public function createSauce() {
      $pizza = new MarinaraSauce();
      return $pizza;
    }
    public function createCheese() {
      $pizza = new ReggianoCheese();
      return $pizza;
    }
    public function createVeggies() {
      $pizza = new NYVeggies();
      return $pizza;
    }
    public function createPepperoni() {
      $pizza = new Pepperoni();
      return $pizza;
    }
    public function createClam() {
      $pizza = new FreshClam();
      return $pizza;
    }

  }

?>
