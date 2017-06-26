
<?php


// Définition des fruits et des etats et création du tableau vide
$fruits = ['banane' , 'pomme' , 'poire'];
$etats = ['mûre' , 'pourrie'];

function corbeilleDeFruits($fruits, $etats){
//On appelle les valeurs des tableaux dans les variables $fruit et $etat
foreach($fruits as $fruit){
    foreach ($etats as $etat){

        //On remplit le tableau vide avec les valeurs
        $corbeilles[] = $fruit ." ". $etat;

    }
}
echo "Dans ma corbeille de fruits j'ai:";

    foreach ($corbeilles as $corbeille) {
        echo "<pre>";
        echo $corbeille;
        echo "</pre>";
    }
}
//On appelle la fonction corbeilleDeFruits
corbeilleDeFruits($fruits, $etats);

?>

<!--Exercice 1

Un algo pour créer un tableau associatif à partir de deux autres tableaux.

Tableau formateurs :  
$cuissons : ["à point", "saignant", "bleu", "bien cuit"];
$viandes : ["poulet", "boeuf", "mouton"];

Exemple de rendu :    
$commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ] -->