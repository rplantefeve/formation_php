<?php
use A\B\MaClasseTresTresLongue as Mine;
$obj = new Mine;

// même chose que use A\B\C as C
use A\B\C;

// importing a function (PHP 5.6+)
use function My\Full\functionName;

// aliasing a function (PHP 5.6+)
use function A\B\nomfonction as fonc;

// importing a constant (PHP 5.6+)
use const My\Full\CONSTANT;

$obj = new Another; // instantiates object of class My\Full\Classname
NSname\subns\func(); // calls function My\Full\NSname\subns\func
func(); // appelle fonction A\B\nomfonction
echo CONSTANT; // echoes the value of My\Full\CONSTANT