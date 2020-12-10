<?php
$isCivility = true;
$isFirstname = true;
$isLastname = true;
$civility = NULL;
$firstname = NULL;
$lastname = NULL;
if ($_GET) //si $_GET contient au moins une donnée, donc TRUE
{
    if (isset($_GET['civility'])) //Si le paramètre civility existe dans l'URL
    {
        if ($_GET['civility'] != '') //ON vérifie si le champs n'est pas vide
        {

            $civility = $_GET['civility']; //Si il n'est pas vide, la variable $civility va contenir la valeur insérée
        } else {
            $isCivility = false; //Sinon, la variable est vide et un message demande de le remplir
        }
    } else { //Si le paramètre civility n'existe pas, un message d'erreur est envoyé
        echo 'Requête GET incorrect';
        exit();
    }
    if (isset($_GET['firstname'])) //Si le paramètre firstname existe dans l'URL
    {
        if ($_GET['firstname'] != '') //On vérifie si le champs n'est pas vide
        {
            $firstname = $_GET['firstname']; //Si il n'est pas vide, la variable $firstname va contenir la valeur insérée
        } else {
            $isFirstname = false; //Sinon, la variable est vide et un message demande de le remplir
        }
    } else { //Si le paramètre firstname n'existe pas, un message d'erreur est envoyé
        echo 'Requête GET incorrect';
        exit();
    }
    if (isset($_GET['lastname'])) {
        if ($_GET['lastname'] != '') {
            $lastname = $_GET['lastname'];
        } else {
            $isLastname = false;
        }
    } else {
        echo 'Requête GET incorrect';
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 6 Partie 7</title>
</head>

<body>
    <h1>Exercice 6 Partie 7</h1>

    <?php if ($_GET && $isCivility && $isFirstname && $isLastname) : ?>
        <p><?= 'Hello' . ' ' . $civility . ' ' . $lastname . ' ' . $firstname ?></p>
    <?php else : ?>
        <form action="index.php" method="get">
            <fieldset>
                <legend>Formulaire</legend>
                <select name="civility" id="civility">
                    <option value=""></option>
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
                <p><?= $isCivility ? '' : 'Veuillez renseigner votre civilité'; ?></p>
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" value="">
                <p><?= $isFirstname ? '' : 'Veuillez renseigner votre prénom'; ?></p>
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" value="">
                <p><?= $isLastname ? '' : 'Veuillez renseigner votre nom'; ?></p>
                <input type="submit" value="submit">
            </fieldset>
        </form>
    <?php endif ?>

</body>

</html>