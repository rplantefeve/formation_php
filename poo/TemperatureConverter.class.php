<?php

class TemperatureConverter {

    public static function celsiusToFahrenheit(string $temperatureCelsius): float {
        // Convert Celsius to Fahrenheit.
        $fahrenheit = ($temperatureCelsius * 9 / 5) + 32;

        return $fahrenheit;
    }

    public static function fahrenheitToCelsius(string $temperatureFahrenheit): float {

        // Convert Fahrenheit to Celsius.
        $celsius = ($temperatureFahrenheit - 32) * 5 / 9;

        return $celsius;
    }

}
