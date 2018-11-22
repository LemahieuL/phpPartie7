<?php
$name = $_GET['name'];
$firstName = $_GET['firstName'];
htmlspecialchars($name);
htmlspecialchars($firstName);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 1 user partie 7</title>
    </head>
    <body>
        <p>Votre nom est <?= $name; ?> et votre prénom est <?= $firstName; ?>.</p>
    </body>
</html>