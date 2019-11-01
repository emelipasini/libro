<?php

  abstract class PizzaStore {

    // METODOS
    public function orderPizza($type) {
      $pizza = $this->createPizza($type);
      $pizza->prepare();
      $pizza->bake();
      $pizza->cut();
      $pizza->box();
      echo "Orden lista!";
    }
    public abstract function createPizza($type);

  }

?>
