
<!--Exercice 1 - Afficher les n premiers chiffres

Vous devez réaliser une fonction d'affichage. La fonction prend en paramètres 2 nombres qui correspondent au début et à la fin d’une plage de nombres.

Vous devez afficher tous les nombres de cette plage en respectant les règles ci-dessous :

Les nombres doivent être affichés sous forme de liste
Les nombres paires sont en bleu
Les nombres impaires sont en orange
Les nombres qui sont des carrés parfaits sont en gras
Note : La plage de nombres doit être obligatoirement des nombres positifs (supérieur à 0) -->



<?php

    $nb1 = 1;
    $nb2 = 20;

function creationPlage($nb1,$nb2) {

    while ($nb1 <= $nb2) {
        $tabPlage[] = $nb1;
        $nb1++;
    }

    foreach ($tabPlage as $plage) {
        if ($plage % 2 == 0) {
            echo '<font color="blue">'.$plage.'</font>'. "<br>";
        }
        else {
            echo '<font color="orange">'.$plage.'</font>'. "<br>";
        }
               
    }

}
creationPlage($nb1,$nb2)  

?>