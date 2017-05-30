<?php

include 'TemperatureConverter.class.php';

$F = $C = 0.0;

$F = TemperatureConverter::celsiusToFahrenheit("37.2");
$C = TemperatureConverter::fahrenheitToCelsius("150.9");

echo $F.'<br>';
echo $C;


