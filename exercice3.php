<?php

$marques_de_sport = ["puma", "kappa", "umbro", "adidas", "nike"];

$marques_favorites = array_slice($marques_de_sport, 3);

echo "<pre>";
print_r($marques_favorites);
echo "</pre>";


?>

<!--Exercice 3

Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau

Tableau formateur :   
$fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

Exemple de rendu :  
$fruits_favoris : ["noix de coco", "ananas"]; -->