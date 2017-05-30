<?php

/*
  echo $a;
  echo 'Méthode de requêtage du serveur : ' . $_SERVER['REQUEST_METHOD'];

  $a1 = 1;
  $a2 = 2; // portée globale

  function affiche() {
  global $a1; // $a1 est la variable globale
  echo $a1 . " et " . $GLOBALS['a2'];
  $a1++;
  }

  affiche(); // affiche "1 et 2"
  echo $a1; // affiche "2"  ($a1 a été modifiée)
 */
$a = "01";
if ($a) {
    echo 'true';
} else {
    echo 'false';
}

