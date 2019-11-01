<?php

  require_once("ingredientfactory.php");
  require_once("ingredients/thickcrustdough.php");
  require_once("ingredients/plumtomatosauce.php");
  require_once("ingredients/mozzarellaparmesanocheese.php");
  require_once("ingredients/chicagoveggies.php");
  require_once("ingredients/notfreshclam.php");
  require_once("ingredients/pepperoni.php");

  class ChicagoIngredientFactory implements IngredientFactory {

    // METODOS HEREDADOS DE INGREDIENT FACTORY
    public function createDough() {
      return new ThickCrustDough();
    }
    public function createSauce() {
      return new PlumTomatoSauce();
    }
    public function createCheese() {
      return new MozzarellaParmesanoCheese();
    }
    public function createVeggies() {
      return new ChicagoVeggies();
    }
    public function createPepperoni() {
      return new Pepperoni();
    }
    public function createClam() {
      return new NotFreshClam();
    }

  }

?>
