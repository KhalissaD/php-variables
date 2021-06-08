<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset='utf-8'>
        <title>Exo 7 PHP</title>
    </head>

    <body>
        <h1>Exo 7 PHP</h1>
        <p> Créer trois variables <b>lastname, firstname, age</b> et les initier avec la valeur de votre choix.<br>
        Afficher : <i>Bonjour</i> + <b>lastname</b> + <b>firstname</b> +<i>, tu as</i> + <b>age</b> <i>ans</i>.</p>
        
        <?php
            $lastname = 'Ming';
            $firstname = 'Xiao';
            $age = 468;

            echo 'Bonjour'.' '. $lastname .' '. $firstname.', tu as' .' '. $age .' '.'ans.';
        ?>
    </body>
</html>