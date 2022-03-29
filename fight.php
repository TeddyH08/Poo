<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POO Games</title>
    </head>

    <body>
        <?php
            require "assets/php/perso.php";


            if ($guerrier->vit > $mage->vit) {
                echo ($guerrier->nom ." attaque en premier");

                while ($guerrier->vie > 0 && $mage->vie > 0){
                    $mage_atk = $mage->atk * ($guerrier->def / 100);
                    $guerrier_atk = $guerrier->atk * ($mage->def / 100);
                    $mage_atk_guerrier = $guerrier->vie - ($mage_atk);
                    $guerrier_atk_mage = $mage->vie - ($guerrier->atk * ($mage->def / 100));

                    ?><br><?php

                    echo ($guerrier->nom ." attaque ". $mage->nom ." et inflige ". $guerrier_atk ." points de dégâts !");
                    $mage->vie = $guerrier_atk_mage;

                    ?><br><?php

                    echo ("Il reste ". $mage->vie ." points de vie à ". $mage->nom);

                    ?><br><?php

                    if ($mage->vie <= 0) {
                        echo ($guerrier->nom ." a gagné !!");
                    } else {
                        ?><br><?php

                        echo ($mage->nom ." attaque ". $guerrier->nom ." et inflige ". $mage_atk ." points de dégâts !");
                        $guerrier->vie = $mage_atk_guerrier;

                        ?><br><?php

                        echo ("Il reste ". $guerrier->vie ." points de vie à ". $guerrier->nom);
                        if ($guerrier->vie <= 0) {
                            echo ($mage->nom ." a gagné !!");
                        }
                    }
                }
            } else {
                echo ($mage->nom ." attaque en premier");

                while ($mage->vie > 0 && $guerrier->vie > 0){
                    $mage_atk = $mage->atk * ($guerrier->def / 100);
                    $guerrier_atk = $guerrier->atk * ($mage->def / 100);
                    $mage_atk_guerrier = $guerrier->vie - ($mage_atk);
                    $guerrier_atk_mage = $mage->vie - ($guerrier->atk * ($mage->def / 100));

                    ?><br><?php

                    echo ($mage->nom ." attaque ". $guerrier->nom ." et inflige ". $mage_atk ." points de dégâts !");
                    $guerrier->vie = $mage_atk_guerrier;

                    ?><br><?php

                    echo ("Il reste ". $guerrier->vie ." points de vie à ". $guerrier->nom);

                    ?><br><?php

                    if ($guerrier->vie <= 0) {
                        echo ($mage->nom ." a gagné !!");
                    } else {
                        ?><br><?php

                        echo ($guerrier->nom ." attaque ". $mage->nom ." et inflige ". $guerrier_atk ." points de dégâts !");
                        $mage->vie = $guerrier_atk_mage;

                        ?><br><?php

                        echo ("Il reste ". $mage->vie ." points de vie à ". $mage->nom);
                        if ($mage->vie <= 0) {
                            echo ($guerrier->nom ." a gagné !!");
                        }
                    }
                }
            }


        ?>
        <br>
        <br>
        <br>
        <a href="index.php">Retour</a>
    </body>
</html>