<?php
include './DAO.php';

spl_autoload_register(function ($class_name) {

    include "../interface/". $class_name . ".php";

});


//include '../interface/IDataRecovery.php';
//include '../interface/DBMysqliRecovery.php';
//include '../interface/DBPDORecovery.php';
//include '../interface/FileRecovery.php';
//
//$connexion = new DBPDORecovery();
//
//$films = DAO::getInstance()->getDAO($connexion)->findAll();
//
//var_dump($films);

//$connexion = new DBMysqliRecovery("localhost","userCinema","pwdCinema","cinema_crud");
//
//$cinemas = DAO::getInstance()->getDAO($connexion)->findAll("cinema");
//
//var_dump($cinemas);
//
//
//$cinemas = DAO::getInstance()->getDAO($connexion)->findById(1,"CINEMAID","cinema");
//
//var_dump($cinemas);



$connexion = new FileRecovery("../interface/datacinema.csv");

$cinemas = DAO::getInstance()->getDAO($connexion)->findAll("cinema");

var_dump($cinemas);






