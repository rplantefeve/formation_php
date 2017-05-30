<?php
// Parse sans les sections
$ini_array = parse_ini_file("exemple.ini");
print_r($ini_array);
// Array ( [extension] => xdebug [level] => 3 [exception_level] => 2 )

// Parse avec les sections
$ini_array = parse_ini_file("exemple.ini", true);
print_r($ini_array);
//Array ( 
//    [debug] => Array ( 
//        [extension] => xdebug 
//        [level] => 3 ) 
//    [exceptions] => Array ( 
//        [exception_level] => 2 ) )