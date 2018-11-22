<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="stle.css" />
        <title>Exercice 2 php Partie 7</title>
    </head>
    <body>
        <form method="post" action="/exercice2/user.php">
            <div>
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name" required />
                <label for="firstName">Prénom : </label>
                <input type="text" name="firstName" id="firstName" required />
            </div>
            <div class="formTest">
                <input type="submit" value="Envoyer!" />
            </div>
        </form>
    </body>
</html>