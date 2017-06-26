<?php

// Définition du tableau 
$sports = ['Football', 'Basket', 'Volley', 'Natation', 'Rugby'];

// Création de la fonction
function lesport($sports){
    //Fonction native qui permet d'enlever la valeur centrale volley
    $bestsports = array_splice($sports, 2 , -2);
    
    echo "Les sports que je pratique sont:";

    foreach ($sports as $sport){
        echo "<pre>";
        echo $sport;
        echo "</pre>";
    }
    
}
// Appel de la fonction
lesport($sports)

?>

<!-- ## Exercice 4

Un algo pour supprimer la valeur "milieu" d'un tableau

Tableau formateur :  
$prenoms : ["Harry", "Hilary", "Harrington", "Hagrid", "Holmes"];

Exemple de rendu :  
$prenoms : ["Harry", "Hilary", "Hagrid", "Holmes"]; -->