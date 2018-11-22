<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="stle.css" />
        <title>Exercice 1 php Partie 7</title>
    </head>
    <body>
        <?php
        ?>
        <form method="get" action="/exercice1/user.php">
            <div>
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name" />
                <label for="firstName">Prénom : </label>
                <input type="text" name="firstName" id="firstName" />
            </div>
            <div class="formTest">
                <input type="submit" value="Envoyer!">
            </div>
        </form>
    </body>
</html>