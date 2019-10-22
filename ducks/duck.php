<?php

  require_once("include.php");

  abstract class Duck implements FlyBehavior, QuackBehavior {

    // ATRIBUTOS
    protected $flyBehavior;
    protected $quackBehavior;

    // CONSTRUCTOR
    public function __construct() {
      $this->setFlyBehavior(new FlyBehavior());
      $this->setQuackBehavior(new QuackBehavior());
    }

    // SETTERS Y GETTERS
    public function setFlyBehavior($behavior) {
      $flyBehavior = $behavior;
    }
    public function getFlyBehavior() {
      return $this->flyBehavior;
    }
    public function setQuackBehavior($behavior) {
      $quackBehavior = $behavior;
    }
    public function getQuackBehavior() {
      return $this->quackBehavior;
    }

    // METODOS
    abstract public function display();

    public function swim() {
      echo "Estoy nadando <br>";
    }

  }
 ?>
