<?php
include './Personne.class.php';
include './Entreprise.class.php';
include './Objet.class.php';
include './Instrument.class.php';


$e1 = new Personne("G.R.R.", "Martin");
$e2 = new Entreprise("50978945600019");
$e2->ajouterEmploye($e1);
$e2->ajouterBranche('IT');

$e1->afficherInfos();
$e2->afficherInfos();


$guitare = new Instrument('bois', 'bon', 'Fender stratocaster', '250');
$guitare->afficher();


