<?php

include './DB_1.php';


$pdo = new PDO('mysql:host=localhost;dbname=cinema_crud','userCinema','pwdCinema');

$films = DB::getInstance()->getConnection($pdo)->query('SELECT * FROM film')->fetchAll();

var_dump($films);

$cinemas = DB::getInstance()->getConnection()->query('SELECT * FROM cinema')->fetchAll();

var_dump($cinemas);

