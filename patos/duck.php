<?php

  require_once("flybehavior.php");
  require_once("quackbehavior.php");

  abstract class Duck implements FlyBehavior, QuackBehavior {

    // ATRIBUTOS
    protected $flyBehavior;
    protected $quackBehavior;

    // CONSTRUCTOR
    public function __construct() {
      $this->setFlyBehavior();
      $this->setQuackBehavior();
    }

    // SETTERS Y GETTERS
    public function setFlyBehavior() {
      $flyBehavior = new FlyBehavior();
    }
    public function getFlyBehavior() {
      return $this->flyBehavior;
    }
    public function setQuackBehavior() {
      $quackBehavior = new QuackBehavior();
    }
    public function getQuackBehavior() {
      return $this->quackBehavior;
    }

  }
 ?>
