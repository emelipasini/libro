<?php

  require_once("include.php");

  echo "PATOS <br>";

  $mallardDuck = new MallardDuck();
  echo "<br>";
  $mallardDuck->fly();
  echo "<br>";
  $mallardDuck->quack();
  echo "<br>";
  $mallardDuck->swim();
  echo "<br><br>";

  $rubberDuck = new RubberDuck();
  $rubberDuck->fly();
  echo "<br>";
  $rubberDuck->quack();
  echo "<br>";
  $rubberDuck->swim();
  echo "<br><br>";

  $decoyDuck = new DecoyDuck();
  $decoyDuck->fly();
  echo "<br>";
  $decoyDuck->setFlyBehavior(new FlyRocketPowered());
  $decoyDuck->fly();
  $decoyDuck->quack();
  echo "<br>";
  $decoyDuck->swim();
  echo "<br><br>";

 ?>
