<?php

/**
 * @param string $var
 * @return bool
 */
function isNameValid($var) /* On créer une function pour effectuer la regex */ {
    return preg_match('/^[a-zA-ZÂ-ÿ -]+$/i', $var);
}
$error = true; /* Création de la valeur error utilliser plus bas */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="stle.css" />
        <title>Exercice 7 php Partie 7</title>
    </head>
    <body>
        <?php
        if (isset($_POST['name'], $_POST['firstName'], $_POST['civility'], $_FILES['myFile']))/* Si les donner sont disponible on continue, sinon, on renvoit you are not human */ {
            $gender = $_POST['civility']; /* On créer des variable pour recupérer les donners */
            $name = $_POST['name'];
            $firstName = $_POST['firstName'];
            $file = $_FILES['myFile']['name'];
            if (isNameValid($name) && isNameValid($firstName))/* Si les name et le firstName sont vérifier par la regex on continue, sinon on renvoit que les caractère sont mauvais */ {
                $error = false; /* Si tous est bon la valeur error passe fause */
            } else {
                echo 'Caractère mauvais';
            }
        } else {
            ?> <form method="post" action="index.php" enctype="multipart/form-data">
                <div>
                    <select name="civility">
                        <option value="un homme">Mr</option>
                        <option value="une femme">Mme</option>
                        <option value="non-Binaire">Non-Binaire</option>
                    </select>
                    <label for="name">Nom : </label>
                    <input type="text" name="name" id="name" required />
                    <label for="firstName">Prénom : </label>
                    <input type="text" name="firstName" id="firstName" required />
                    <input type="file" name="myFile" required />
                </div>
                <div class="formTest">
                    <input type="submit" value="Envoyer!" />
                </div>
            </form><?php
        }
        if (!$error) {
            ?>
            <p>Vous etes <?= $gender; ?>, votre nom est <?= $name; ?> et votre prénom est <?= $firstName; ?>.</p>
            <p>Nom du fichier : <?= $file ?></p>
        <?php } ?>
    </body>
</html>