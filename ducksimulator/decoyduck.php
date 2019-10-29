<?php

  require_once("include.php");

  class DecoyDuck extends Duck implements FlyBehavior, QuackBehavior {

    // CONSTRUCTOR
    public function __construct() {
      $this->setFlyBehavior(new FlyNoWay());
      $this->setQuackBehavior(new MuteQuack());
      $this->display();
    }

    // METODOS HEREDADOS DE LAS INTERFACES
    public function fly() {
      $this->getFlyBehavior()->fly();
    }
    public function quack() {
      $this->getQuackBehavior()->quack();
    }

    // SETTERS Y GETTERS
    public function setFlyBehavior($behavior) {
      $this->flyBehavior = $behavior;
    }
    public function getFlyBehavior() {
      return $this->flyBehavior;
    }
    public function setQuackBehavior($behavior) {
      $this->quackBehavior = $behavior;
    }
    public function getQuackBehavior() {
      return $this->quackBehavior;
    }

    // METODOS HEREDADOS DE DUCK
    public function display() {
      echo "Soy un pato de decoración <br>";
    }

  }

 ?>
