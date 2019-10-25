<?php

  require_once("observer.php");
  require_once("displayelement.php");

  class Forecast implements Observer, DisplayElement {

    // ATRIBUTOS
    private $oldPressure = 28;
    private $newPressure;

    // CONSTRUCTOR
    public function __construct(Subject $weatherData) {
		  $this->weatherData = $weatherData;
		  $this->weatherData->registerObserver($this);
	  }

    // SETTERS Y GETTERS
    public function setOldPressure($oldPressure) {
      $this->oldPressure = $oldPressure;
    }
    public function getOldPressure() {
      return $this->oldPressure;
    }
    public function setNewPressure($newPressure) {
      $this->newPressure = $newPressure;
    }
    public function getNewPressure() {
      return $this->newPressure;
    }

    // METODO HEREDADO DE OBSERVER
    public function update($temperature, $humidity, $pressure) {
      $this->setOldPressure($this->getNewPressure());
      $this->setNewPressure($pressure);
      $this->display();
    }

    // METODO HEREDADO DE DISPLAY ELEMENT
    public function display() {
      echo "Pronóstico: <br>";
      if ($this->getNewPressure() > $this->getOldPressure()) {
        echo "El clima va a mejorar! <br>";
      }
      else if ($this->getNewPressure() == $this->getOldPressure()) {
        echo "El clima va a continuar como está <br>";
      }
      else {
        echo "El clima va a empeorar! <br>";
      }
      echo "<br>";
    }

  }

?>
