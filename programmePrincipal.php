<?php
// tolérance
include 'Personne.php';
include 'Calculatrice.php';
// intolérance
require 'Hurluberlu.php';

// instanciation d'un objet Personne, autrement dit on fait appel à
// la fonction __construct
$toto = new Personne('Le héros', 'Toto');

$tata = new Personne('L\'héroïne', 'Tata');
$foo = new Personne('Bar', 'Foo');

echo Personne::$nbPersonnes;

// instanciation d'un hurluberlu
$hubert = new Hurluberlu('LeOuf', 'Hubert', 'détraqué');


// envoi de message pour que l'objet se présente
$toto->sePresenter();
$tata->sePresenter();
$foo->sePresenter();

echo $toto->getNom();
$toto->setNom('LeZéro');
echo $toto->getNom();

// c'est au tour de l'hurluberlu
$hubert->sePresenter();





$val = 1;
$val2 = 2;
$res = Calculatrice::addition($val, $val2);
echo 'Addition ' . $res;
$res = Calculatrice::multiplication($val, $val2);
echo 'Multiplication ' . $res;
$res = Calculatrice::soustraction($val, $val2);
echo 'soustraction ' . $res;
$res = Calculatrice::division($val, $val2);
echo 'division ' . $res;
