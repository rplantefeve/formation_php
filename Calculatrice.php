<?php

class Calculatrice {

    public static function addition(string $operandeA, string $operandeB): float {
        return $operandeA + $operandeB;
    }
    public static function soustraction(string $operandeA, string $operandeB): float {
        return $operandeA - $operandeB;
    }
    public static function multiplication(string $operandeA, string $operandeB): float {
        return $operandeA * $operandeB;
    }
    public static function division(string $operandeA, string $operandeB): float {
        return $operandeA / $operandeB;
    }


}
