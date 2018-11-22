<?php

/**
 * @param string $var
 * @return bool
 */
function isNameValid($var) {
    return preg_match('/^[a-zA-ZÂ-ÿ -]+$/i', $var);
}

$error = true; /* Création de la valeur error utilliser plus bas */
if (isset($_POST['name'], $_POST['firstName'])) {
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    if (isNameValid($name) && isNameValid($firstName)) {
        $error = false; /* Si tous est bon la valeur error passe fause */
    } else {
        echo 'Caractère mauvais';
    }
} else {
    echo 'Your are not humain!';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2 user partie 7</title>
    </head>
    <body>
        <?php if (!$error) { ?>
            <p>Votre nom est <?= $name; ?> et votre prénom est <?= $firstName; ?>.</p>
        <?php } ?>
    </body>
</html>