<?php

  require_once("observer.php");
  require_once("displayelement.php");
  require_once("weatherdata.php");

  class CurrentConditionDisplay implements Observer, DisplayElement {

    // ATRIBUTOS
    private $temperature;
    private $humidity;
    private $weatherData;

    // CONSTRUCTOR
    public function __construct(Subject $weatherData) {
		  $this->weatherData = $weatherData;
		  $this->weatherData->registerObserver($this);
	  }

    // SETTERS Y GETTERS
    public function setTemperature($temperature) {
      $this->temperature = $temperature;
    }
    public function getTemperature() {
      return $this->temperature;
    }
    public function setHumidity($humidity) {
      $this->humidity = $humidity;
    }
    public function getHumidity() {
      return $this->humidity;
    }
    public function setWeatherData(WeatherData $weatherData) {
      $this->weatherData = $weatherData;
    }
    public function getWeatherData() {
      return $this->weatherData;
    }

    // METODO HEREDADO DE OBSERVER
    public function update($temperature, $humidity, $pressure) {
      $this->setTemperature($temperature);
      $this->setHumidity($humidity);
      $this->display();
    }

    // METODO HEREDADO DE DISPLAY ELEMENT
    public function display() {
      echo "Condición climática en este momento: <br>";
      echo "La temperatura es: " . $this->getTemperature() . "º <br>";
      echo "La humedad es: " . $this->getHumidity() . "% <br>";

    }

  }

?>
