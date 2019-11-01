<?php

  require_once("pizzastore.php");
  require_once("pizzas/chicagostylecheesepizza.php");
  require_once("pizzas/chicagostyleveggiepizza.php");
  require_once("pizzas/chicagostyleclampizza.php");
  require_once("pizzas/chicagostylepepperonipizza.php");

  class ChicagoStylePizzaStore extends PizzaStore {

    // METODOS HEREDADOS DE PIZZA STORE
    public function createPizza($type) {
      if ($type == "Queso") {
        return new ChicagoStyleCheesePizza();
      }
      else if ($type == "Pepperoni") {
        return new ChicagoStylePepperoniPizza();
      }
      else if ($type == "Almeja") {
        return new ChicagoStyleClamPizza();
      }
      else if ($type == "Vegetariana") {
        return new ChicagoStyleVeggiePizza();
      }
    }

  }

?>
