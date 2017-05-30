<?php

$requetePreparee = $connexion->prepare('SELECT * FROM film where idFilm = :id');
// laison du paramètre :id à sa valeur, et c'est un entier
$requetePreparee->bindValue(':id', 1, PDO::PARAM_INT);
// exécution de la requête préparée
$requetePreparee->execute();
// récupèration du résultat
$resultat = $requetePreparee->fetch();

