<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exo 5 PHP</title>
    </head>

    <body>
        <h1>Exo 5 PHP</h1>
        <p>Créer une variable de type int, l'initialiser avec <b>rien</b>. Afficher sa valeur.<br>Donner une valeur à cette variable et l'afficher.</p>

        <?php
           (int)$typeInt = 0;
           var_dump($typeInt);
           settype($typeInt, "string");
           var_dump($typeInt);
        ?>
    </body>
</html>