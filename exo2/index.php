<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exo 2 PHP</title>
    </head>

    <body>
        <h1>Exo 2 PHP</h1>
        <p>Créer trois variables lastname, firstname et age et les initialiser avec les valeurs de votre choix.<br><b>Attention age est de type entier</b>. Afficher leur contenu
        </p>
        <?php

            $lastname = "Yue";
            $firstname = "Xiao";
            $age = 468;
            $identite = '';
            $identite = $firstname .' '. $lastname .' '. $age;
            echo $identite
        ?>
    </body>
</html>