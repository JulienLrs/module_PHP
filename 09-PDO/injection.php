<?php

require_once('connect.php');

if(!empty($_POST)){

    if(!empty($_POST['theme'])){

        // Injection HTML à neutraliser
        // htmlspecialchars() neutralise les balises HTML et en fait du simple texte
        $_POST['theme']= htmlspecialchars($_POST['theme']);

        // Injection SQL à neutraliser
        // $pdo->query("INSERT INTO themes (title) VALUES ('".$_POST['theme']."')");
        $statement = $pdo->prepare("INSERT INTO themes (title) VALUES (:title)");
        $statement->execute(array(
            'title' => $_POST['theme']
        ));
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="theme" size="40">
        <button type="submit">Ajouter ce theme</button>
    </form>
</body>

</html>