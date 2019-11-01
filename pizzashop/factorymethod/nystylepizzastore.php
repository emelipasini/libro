<?php

  require_once("pizzastore.php");
  require_once("pizzas/nystylecheesepizza.php");
  require_once("pizzas/nystyleveggiepizza.php");
  require_once("pizzas/nystyleclampizza.php");
  require_once("pizzas/nystylepepperonipizza.php");

  class NYStylePizzaStore extends PizzaStore {

    // METODOS HEREDADOS DE PIZZA STORE
    public function createPizza($type) {
      if ($type == "Queso") {
        return new NYStyleCheesePizza();
      }
      else if ($type == "Pepperoni") {
        return new NYStylePepperoniPizza();
      }
      else if ($type == "Almeja") {
        return new NYStyleClamPizza();
      }
      else if ($type == "Vegetariana") {
        return new NYStyleVeggiePizza();
      }
    }

  }

?>
