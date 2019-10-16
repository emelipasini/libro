<?php

  require_once("duck.php");
  require_once("flybehavior.php");
  require_once("flywithwings.php");
  require_once("quackbehavior.php");
  require_once("quack.php");

  class MallardDuck extends Duck implements FlyBehavior, QuackBehavior {

    // METODOS HEREDADOS DE LAS INTERFACES
    public function fly() {
      $this->getFlyBehavior()->fly();
    }
    public function quack() {
      $this->getQuackBehavior()->quack();
    }

    // SETTERS Y GETTERS
    public function setFlyBehavior() {
      $this->flyBehavior = new FlyWithWings();
    }
    public function getFlyBehavior() {
      return $this->flyBehavior;
    }
    public function setQuackBehavior() {
      $this->quackBehavior = new Quack();
    }
    public function getQuackBehavior() {
      return $this->quackBehavior;
    }
  }

 ?>
