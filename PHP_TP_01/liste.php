<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP 01</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php


    echo '<h1>PHP TP 01</h1>';

    ?>

    <br>
    <h2>Exercice 1 : Identité / Variables </h2>

    <?php
    // Création de mes variables
    $nom = 'Doe';
    $prenom = 'John';
    $email = 'john.doe@free.fr';
    $tel = '06.05.04.03.02';

    // echo "je suis " . $nom . ' ' . $prenom . '<br>';
    // echo "mes coordonées sont : " . $email. ', ' . $tel . '<br>';

    ?>

    <ol>
        <li><?php echo $nom; ?></li>
        <li><?php echo $prenom; ?></li>
        <li><?php echo $email; ?></li>
        <li><?php echo $tel; ?></li>
    </ol>


    <br>
    <hr>
    <h2>Exercice 2 : Identité / Tableau </h2>

    <?php
    $identite = array(
        "Nom" => "Doe",
        "Prenom" => "John",
        "Email" => "john.doe@free.fr",
        "Telephone" => "06.05.04.03.02"
    );

    // var_dump($identite);
    // echo "<br>";
    // echo $identite['Prenom'];
    // echo "<br>";
    // echo $identite['Nom'];
    // echo "<br>";
    // echo $identite['Email'];
    // echo "<br>";
    // echo $identite['Telephone'];
    // echo "<br>";

    ?>
    <br>
    <table>
        <thead>
            <tr>
                <th colspan="2">Exercice 2 - Methode 1</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Nom</b></td>
                <td><?php echo $identite['Nom']; ?></td>
            </tr>
            <tr>
                <td><b>Prenom</b></td>
                <td><?php echo $identite['Prenom']; ?></td>
            </tr>
            <tr>
                <td><b>Email</b></td>
                <td><?php echo $identite['Email']; ?></td>
            </tr>
            <tr>
                <td><b>Téléphone</b></td>
                <td><?php echo $identite['Telephone']; ?></td>
            </tr>
        </tbody>
    </table>

    <?php

    $identite = array(
        "Nom" => "Doe",
        "Prenom" => "John",
        "Email" => "john.doe@free.fr",
        "Telephone" => "06.05.04.03.02"
    );

    echo "<table border='1'>";
    echo "<caption><b>Exercice 2 - Methode 2</b</caption>";

    foreach ($identite as $key => $valeur) {
        echo "<tr><td><b>$key</b></td><td align='left'>$valeur</td></tr><br>";
    }

    ?>
   
</body>

</html>