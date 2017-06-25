
<?php

function corbeilledefruits($fruits, $etats){
// Définition des fruits et des etats et création du tableau vide
$fruits = ['banane' , 'pomme' , 'poire'];
$etats = ['mûre' , 'pourrie'];
$corbeilles = [];

//On appelle les valeurs des tableaux dans les variables $fruit et $etat
foreach($fruits as $fruit){
    foreach ($etats as $etat){

        //On remplit le tableau vide avec les valeurs
        $corbeilles[] = $fruit ." ". $etat;

    };
};

}
//On affiche le tableau vide contenant maintenant des valeurs
echo "<pre>";
return $corbeilles;
echo "</pre>";

?>

<!--Exercice 1

Un algo pour créer un tableau associatif à partir de deux autres tableaux.

Tableau formateurs :  
$cuissons : ["à point", "saignant", "bleu", "bien cuit"];
$viandes : ["poulet", "boeuf", "mouton"];

Exemple de rendu :    
$commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ] -->