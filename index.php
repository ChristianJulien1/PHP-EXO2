<?php

require_once "Stagiaire.php";

$nom = "Oui oui";
$notes = [12, 14, 16];
$stagiaire = new Stagiaire($nom, $notes);

$moyenne = $stagiaire->calculerMoyenne();
$max = $stagiaire->trouverMax();
$min = $stagiaire->trouverMin();

echo "La moyenne de " . $stagiaire->nom . " est " . $moyenne . "\n";
echo "La note maximale de " . $stagiaire->nom . " est " . $max . "\n";
echo "La note minimale de " . $stagiaire->nom . " est " . $min;

?>