<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exo 8 PHP</title>
    </head>

    <body>
        <h1>Exo 8 PHP</h1>
        <p>Créer trois variables.<br>Dans la première mettre le résultat de l'opération <b>3 + 4</b><br>
        Dans la deuxième mettre le résultat de l'opération <b>5*20</b>.<br>
        Dans la troisième mettre le résultat de l'opération <b>45/5</b>.<br>
        Afficher le contenu des variables.</p>
        
        <?php
            $numb3 = 3;
            $numb4 = 4;
            echo $numb3 + $numb4;
            echo '<br>';

            $numb5 = 5;
            $numb20 = 20;
            echo $numb5 * $numb20;
            echo '<br>';

            $numb45 = 45;
            $again5 = 5;
            echo $numb45 / $again5;
        ?>
    </body>
</html>