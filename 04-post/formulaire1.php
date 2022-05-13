<?php

// Si $_POST n'est pas vide, cela signifie que l'utilisateur a soumis le formulaire
if (!empty($_POST)) {
    //$_POST
    var_dump($_POST);

    $erreurs = array();

    if (empty($_POST['pseudo'])) {
        $erreurs[] = 'Merci de remplir votre pseudo';
    } else {
        if (iconv_strlen($_POST['pseudo']) > 20) {
            $erreurs[] = 'La longueur du pseudo ne peut excéder 20 caractères';
        }
    }

    if (empty($_POST['mdp'])) {
        $erreurs[] = 'Merci de saisir un mot de passe';
    } else {
        $pattern = '~^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\_\!\%\/\@\#])(.+){8,20}$~';
        if (!preg_match($pattern, $_POST['mdp'])) {
            $erreurs[] = 'Le mot de passe doit comporter 8 à 20 caractères et contenir au moins 
1 minuscule, 1 majuscule, 1 chiffre et 1 caractère spécial parmi _!%/@#';
        }
    }

    if (empty($_POST['email'])) {
        $erreurs[] = 'Merci de saisir votre adresse mail';
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $erreurs[] = 'Adresse mail invalide';
        }
    }
    // Bilan final
    if (empty($erreurs)) {
        // tout est ok
        // evoi de mail, isertion en BDD, ...


        $entetes[] = "From: no-reply@example.com";
        $entetes[] = "Reply-To: contact@example.com";
        $entetes[] = "MIME-Version: 1.0";
        $entetes[] = "Content-Type:text/html; charset=utf-8";


        $message = '<p>Votre inscription sous le pseudo <strong> ' . $_POST['pseudo'] . "</strong> est confirmée</p> ";
        mail($_POST['email'],'Nouvelle inscription',$message);

        /*
        $message = "L'utilisateur " . $_POST['pseudo'] . " vient de s'inscrire avec l'adresse mail " . $_POST['email'];
        mail('admin@monsite.fr','Nouvelle inscription',$message);
        Autre possibilite
        */
    }
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 1</title>
    <link rel="stylesheet" href="formulaire1.css">
</head>

<body>

    <?php if (!empty($erreurs)) : ?>
        <div class="erreur"><?php echo implode('<br>', $erreurs) ?></div>
    <?php endif; ?>

    <form action="" method="post">
        <fieldset>
            <legend>Identifiants</legend>
            <div>
                <label for="login">Identifiant</label>
                <input type="texte" id="login" name="pseudo" placeholder="Votre login" value="<?php echo $_POST['pseudo'] ?? '' ?>">
            </div>
            <div>
                <label for="mdp">Mot de passe</label>
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?php echo $_POST['email'] ?? '' ?>">
            </div>
        </fieldset>



        <div class="bouton">
            <button type="submit">Envoyer</button>
        </div>


    </form>
</body>

</html>