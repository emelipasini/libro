<?php

  require_once("espresso.php");
  require_once("darkroast.php");
  require_once("houseblend.php");
  require_once("decaf.php");
  require_once("mocha.php");
  require_once("whip.php");
  require_once("milk.php");
  require_once("soy.php");

  echo "<b>CAFETERÍA</b> <br><br>";

  $espresso = new Espresso(1);
  echo "Su orden: <br>";
  echo $espresso->getDescription() . "<br>";
  echo "Total: $";
  echo $espresso->cost();

  echo "<br><br>";

  $dark = new DarkRoast(2);
  $dark = new Mocha($dark);
  $dark = new Mocha($dark);
  $dark = new Whip($dark);
  echo "Su orden: <br>";
  echo $dark->getDescription() . "<br>";
  echo "Total: $";
  echo $dark->cost();

  echo "<br><br>";

  $house = new HouseBlend(3);
  $house = new Milk($house);
  $house = new Soy($house);
  echo "Su orden: <br>";
  echo $house->getDescription() . "<br>";
  echo "Total: $";
  echo $house->cost();

  echo "<br><br>";

  $decaf = new Decaf(1);
  $decaf = new Milk($decaf);
  echo "Su orden: <br>";
  echo $decaf->getDescription() . "<br>";
  echo "Total: $";
  echo $decaf->cost();

?>
