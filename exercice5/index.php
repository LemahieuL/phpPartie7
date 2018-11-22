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
    $gender = $_POST['civility'];
    $name = $_POST['name'];
    $firstName = $_POST['firstName'];
    if (isNameValid($name) && isNameValid($firstName)) {
        $error = false; /* Si tous est bon la valeur error passe fause */
    } else {
        echo 'Caractère mauvais';
    }
} else {
    echo 'Your are not human!';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5 php Partie 7</title>
    </head>
    <body>
        <form method="post" action="/exercice5/index.php">
            <div>
                <select name="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name" required />
                <label for="firstName">Prénom : </label>
                <input type="text" name="firstName" id="firstName" required />
            </div>
            <div class="formTest">
                <input type="submit" value="Envoyer!" />
            </div>
        </form>
        <?php if (!$error) { ?>
            <p><?= $gender; ?>, votre nom est <?= $name; ?> et votre prénom est <?= $firstName; ?>.</p>
        <?php } ?>
    </body>
</html>