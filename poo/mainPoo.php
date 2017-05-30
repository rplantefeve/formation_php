<?php


spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});


$guitare = new Instrument('Fender stratocaster', '250');

$violon = new InstrumentACordes('Stradivarius', '15000', 4, 'nylon');

$guitare->depreciation();
$guitare->depreciation(0.5);

$violon->depreciation(0.2);



$etu1 = new Etudiant('Ladalle', 'Roger');
$pers1 = new Personne('Marx', 'Carl');


$ent1 = new Entreprise("5465465456456");
$ent1->ajouterEmploye($etu1);
$ent1->ajouterEmploye($pers1);
$ent1->afficherEmployes();

// Affichage du nombre de personnes
echo "Nombre de personnes : " . Personne::$nombrePersonnes;
$jean = new Personne("Valjean", "Jean");
// Affichage du nombre de personnes
echo "Nombre de personnes : " . Personne::$nombrePersonnes;

