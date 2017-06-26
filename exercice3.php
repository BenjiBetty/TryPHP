<?php

$marques_de_sport = ["puma", "kappa", "umbro", "adidas", "nike"];

function mesmarques($marques_de_sport){


$marques_favorites = array_slice($marques_de_sport, -2);

    foreach ($marques_favorites as $marque_favorite) {
        echo "<pre>";
        echo $marque_favorite;
        echo "</pre>";
    }
}

mesmarques($marques_de_sport);

?>

<!--Exercice 3

Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau

Tableau formateur :   
$fruits : ["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"];

Exemple de rendu :  
$fruits_favoris : ["noix de coco", "ananas"]; -->