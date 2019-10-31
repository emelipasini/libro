<?php

  require_once("nystylepizzastore.php");
  // require_once("pizzas/nystylecheesepizza.php");
  require_once("chicagostylepizzastore.php");
  // require_once("pizzas/chicagostylecheesepizza.php");


  echo "<b>PIZZERÍA</b> <br><br>";

  $shopNY = new NYStylePizzaStore();
  $shopC = new ChicagoStylePizzaStore();

  $pizzaNY = $shopNY->createPizza("Queso");
  echo "Ethan ordenó una " . $pizzaNY->getName() . "<br>";
  $pizzaC = $shopC->createPizza("Queso");
  echo "Joel ordenó una " . $pizzaC->getName();

  echo "<br><br>";

  $shopNY->orderPizza("Queso");

  echo "<br><br>";

  $shopC->orderPizza("Pepperoni");

  echo "<br><br>";

  $shopNY->orderPizza("Vegetariana");

  echo "<br><br>";

  $shopC->orderPizza("Almeja");

?>
