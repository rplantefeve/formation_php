<?php
require_once '../inc/fct_utiles.inc.php';

$contents = file_get_contents(__DIR__.'\data\instrument.txt');
$unsrzed = unserialize($contents);
var_dump($unsrzed);
echo $unsrzed->getNom();