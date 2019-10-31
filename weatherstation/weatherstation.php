<?php

  require_once("weatherdata.php");
  require_once("currentconditiondisplay.php");
  require_once("staticsdisplay.php");
  require_once("forecastdisplay.php");

  echo "<b>ESTACION METEOROLÓGICA</b> <br>";
  $estacion = new WeatherData();
  $currentDisplay = new CurrentConditionDisplay($estacion);
  $staticsDisplay = new StaticsDisplay($estacion);
  $forecast = new Forecast($estacion);
  // no se como hacer en php para que dentro de la clase CurrentConditionDisplay registre en WeatherData su propia instancia
  // $currentDisplay->getWeatherData()->registerObserver($currentDisplay);
  echo "<br>";
  $estacion->setMeasurements(24.5, 70, 29.3);
  $estacion->setMeasurements(13, 80, 27.2)




?>
