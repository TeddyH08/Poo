<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POO Games</title>

        <link rel="stylesheet" href="assets/style/style.css">
    </head>

    <body>
        <h1>POO Games</h1>
        <p>Bienvenue dans POO Games, veuillez créer un personnage :</p>
        <a href="personnage.php">Créer un personnage</a>
        <br>
        <br>

        <?php
            require "assets/php/perso.php";

            var_dump($guerrier);

            var_dump($mage);

            var_dump($guerrier->mort());
        ?>

        <a href="fight.php">Combat !</a>
    </body>
</html>