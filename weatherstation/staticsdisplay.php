<?php

  require_once("observer.php");
  require_once("displayelement.php");

  class StaticsDisplay implements Observer, DisplayElement {

    // ATRIBUTOS
    private $minTemp = 40;
    private $maxTemp = 0;
    private $sumTemp = 0;
    private $amountTemp = 0;

    // CONSTRUCTOR
    public function __construct(Subject $weatherData) {
		  $this->weatherData = $weatherData;
		  $this->weatherData->registerObserver($this);
	  }

    // SETTERS Y GETTERS
    public function setMinTemp($minTemp) {
      $this->minTemp = $minTemp;
    }
    public function getMinTemp() {
      return $this->minTemp;
    }
    public function setMaxTemp($maxTemp) {
      $this->maxTemp = $maxTemp;
    }
    public function getMaxTemp() {
      return $this->maxTemp;
    }
    public function setSumTemp($sumTemp) {
      $this->sumTemp = $sumTemp;
    }
    public function getSumTemp() {
      return $this->sumTemp;
    }
    public function setAmountTemp($amountTemp) {
      $this->amountTemp = $amountTemp;
    }
    public function getAmountTemp() {
      return $this->amountTemp;
    }

    // METODO HEREDADO DE OBSERVER
    public function update($temperature, $humidity, $pressure) {
      $this->setSumTemp($this->getSumTemp() + $temperature);
      $this->setAmountTemp($this->getAmountTemp() + 1);

      if ($this->getMinTemp() > $temperature) {
        $this->setMinTemp($temperature);
      }
      if ($this->getMaxTemp() < $temperature) {
        $this->setMaxTemp($temperature);
      }

      $this->display();
    }

    // METODO HEREDAD DE DISPLAY ELEMENT
    public function display() {
      echo "<br>";
      echo "Estadísticas climatológicas: <br>";
      echo "La temperatura promedio es: ";
      $avg = $this->getSumTemp() / $this->getAmountTemp();
      echo $avg . "º <br>";
      echo "La tempratura mínima es: ";
      echo $this->getMinTemp() . "º <br>";
      echo "La temperatura máxima es: ";
      echo $this->getMaxTemp() . "º <br>";
      echo "<br>";
    }

  }

?>
