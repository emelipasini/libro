<?php

  require_once("subject.php");
  require_once("observer.php");

  class WeatherData implements Subject {

    // ATRIBUTOS
    private $observers;
    private $temprature;
    private $humidity;
    private $pressure;

    // CONSTRUCTOR
    public function __construct() {
      $this->observers = [];
    }

    // SETTERS Y GETTERS
    public function getObservers() {
      return $this->observers;
    }
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
    public function setPressure($pressure) {
      $this->pressure = $pressure;
    }
    public function getPressure() {
      return $this->pressure;
    }

    // METODOS
    public function measurementsChanged($temperature, $humidity, $pressure) {
      $this->notifyObservers($temperature, $humidity, $pressure);
    }
    public function setMeasurements($temperature, $humidity, $pressure) {
      $this->setTemperature($temperature);
      $this->setHumidity($humidity);
      $this->setPressure($pressure);
      $this->measurementsChanged($this->getTemperature(), $this->getHumidity(), $this->getPressure());
    }

    // METODOS HEREDADOS DE SUBJECT
    public function registerObserver(Observer $observer) {
      $observers = $this->getObservers();
      $this->observers[] = $observer;
    }
    public function removeObserver(Observer $observer) {
      $observers = $this->getObservers();
      foreach ($observers as $observador) {
        if ($observer === $observador) {
          $observador = null;
          return "Eliminado";
        }
      }
      return "El observador no existe";
    }
    public function notifyObservers($temperature, $humidity, $pressure) {
      $observers = $this->getObservers();
      foreach ($observers as &$observer) {
        $observer->update($temperature, $humidity, $pressure);
      }
    }

  }

?>
