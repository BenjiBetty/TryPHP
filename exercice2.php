<?php

//On appelle la chaîne de caractères dans la variable $string
$string = 'rock pop folk blues progressif';

function musique($string){

//Dans la variable $styles on appelle la fonction explode
//La fonction explode() permet de segmenter la string en supprimant le séparateur
//Ici le séparateur définit est un espace ' '
$styles = explode(' ', $string);

echo 'Mes styles de musique sont:';

    foreach ($styles as $style) {
        echo "<pre>";
        echo $style;
        echo "</pre>";
    }

}

musique($string);

?>

<!-- ## Exercice 2

Un algo pour transformer une chaine de caractères en tableau 

Phrase formateurs :  
$genres : "horreur fantastique action western thriller comédie drame romance historique";

Exemple de rendu :    
$tags : ["horreur", "fantastique", "action", "western", etc...]  -->