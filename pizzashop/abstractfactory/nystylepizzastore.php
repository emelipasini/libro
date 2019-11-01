<?php

  require_once("pizzastore.php");
  require_once("pizzas/cheesepizza.php");
  require_once("pizzas/veggiepizza.php");
  require_once("pizzas/clampizza.php");
  require_once("pizzas/pepperonipizza.php");

  class NYStylePizzaStore extends PizzaStore {

    // METODOS HEREDADOS DE PIZZA STORE
    public function createPizza($type) {
      if ($type == "Queso") {
        return new CheesePizza("pizza de queso al estilo Nueva York", "NY");
      }
      else if ($type == "Pepperoni") {
        return new PepperoniPizza("pizza de pepperoni al estilo Nueva York", "NY");
      }
      else if ($type == "Almeja") {
        return new ClamPizza("pizza de almeja al estilo Nueva York", "NY");
      }
      else if ($type == "Vegetariana") {
        return new VeggiePizza("pizza vegetariana al estilo Nueva York", "NY");
      }
    }

  }

?>
