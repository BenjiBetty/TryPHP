<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1>Challenge 2 PHP</h1>
        <h2>Exercice 1 - Afficher les n premiers chiffres</h2>
        <p>
            Vous devez réaliser une fonction d'affichage. La fonction prend en paramètres 2 nombres qui correspondent au début et à la fin d’une plage de nombres.

            Vous devez afficher tous les nombres de cette plage en respectant les règles ci-dessous :

            Les nombres doivent être affichés sous forme de liste
            Les nombres paires sont en bleu
            Les nombres impaires sont en orange
            Les nombres qui sont des carrés parfaits sont en gras
            Note : La plage de nombres doit être obligatoirement des nombres positifs (supérieur à 0) 
        </p>

        <p>
                <?php

                $nb1 = 1;
                $nb2 = 30;
            
            if ($nb1 <= 0 ) {
                ?><div class="erreur"><?php exit("Entrez un nombre supérieur à 0");?><?php
            }

            elseif ($nb2 <= 0) {
                ?><div class="erreur"><?php exit("Entrez un nombre supérieur à 0");?><?php
            }

            elseif ($nb1 >= $nb2) {
                ?><div class="erreur"><?php exit("Le premier nombre doit être inférieur au second");?><?php
            }

            function creationPlage($nb1,$nb2) {

                

                while ($nb1 <= $nb2) {
                    $tabPlage[] = $nb1;
                    $nb1++;
                }
                
                    foreach ($tabPlage as $plage) {

                        if (($plage % 2 == 0) && (fmod(sqrt($plage), 1) == 0)) {
                            ?> <div class="nombrePairParfait"><?php echo $plage;?></div><?php
                        }
                        
                        elseif (($plage % 2 > 0) && (fmod(sqrt($plage), 1) == 0)) {
                            ?> <div class="nombreImpairParfait"><?php echo $plage;?></div><?php
                        }
                        
                        elseif ($plage % 2 == 0) {
                            ?> <div class="nombrePair"><?php echo $plage;?></div><?php
                        }

                        elseif ($plage % 2 > 0) {
                            ?> <div class="nombreImpair"><?php echo $plage;?></div><?php
                        }  
                    }
            }
            creationPlage($nb1,$nb2);  

            ?>
        </p>

        
        <h2>Exercice 2 - Afficher le plus grand gap</h2>
        <p>
            Créer un algorithme qui calcule le plus grand écart entre deux entiers consecutifs dans un tableau passé en paramètre d'entrée.
        </p>
        
        <p>
            <?php

                /*$tab = [59, 45, 33, 66, 75];

                function gap($tab){

                    for ($i=0; $i < count($tab) ; $i++) { 

                         Vu le temps passé sur l'exercice 1 je n'ai pas eu le temps d'avancer plus.
                            Pour celui-ci je voulais faire:
                            Si $tab[$i] > $tab[$i+1]
                                faire $tab[$i]-$tab[$i+1]
                            Sinon inverser pour $tab[$i+1]-$tab[$i]
                            Stocker les résultats dans un tableau
                            Parcourir le tableau et afficher la plus grande valeur 
                    }
                    
                }

                gap($tab)*/
            ?>
        </p>

        <h2>Exercice 3 - Jeu de la fourchette</h2>
        <p>
            Simuler le jeu de la fourchette. Ce jeu consiste à essayer de découvrir un nombre quelconque compris entre 1 et 100 inclus, tiré au sort par l’ordinateur (la primitive rand(min, max) retourne un entier entre min et max). L’utilisateur a droit à huit essais maximum. À chaque essai, vous devrez afficher un message indicatif « nombre donné trop petit » ou « nombre donné trop grand ». En conclusion, soit « bravo, vous avez trouvé en [nombre] essai(s) » soit « désolé, le nombre était [valeur] ».
        </p>

        <p>
            <?php

                $min = 1;
                $max = 100;

                function jeuNombreHasard($min, $max){
                    echo rand($min, $max);
                }
                jeuNombreHasard($min, $max)

            ?>
        </p>
    </body>
</html>
