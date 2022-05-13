<?php

require_once('connect.php');

$requete = "SELECT * FROM themes";

$statement = $pdo->query($requete);  // $statement est un objet 
                                     //    de type PDOStatement



echo "Il y a " . $statement->rowCount() . " lignes<br>";
                                     
while( $ligne = $statement->fetch() ) {
    echo $ligne['title'] . '<br>';
}

echo "<hr>";

$statement= $pdo->query($requete);
// Dechargement de toute les lignes
$donnees = $statement->fetchAll();
var_dump($donnees);

foreach($donnees as $ligne) {
    echo $ligne['title'] . '<br>';
}

// REQUETES PREPAREES

// marqueur anonyme ( =?)
$requete = "SELECT * FROM themes WHERE id_theme = ?";
$statement = $pdo->prepare($requete);
$statement->execute(array(
    2
));
$ligne = $statement->fetch();
echo $ligne['title'] . '<br>';



// marqueur nommé ( = :id_theme)
$requete = "SELECT * FROM themes WHERE id_theme = :id_theme";
$statement = $pdo->prepare($requete);

$statement->execute(array(
    ':id_theme' => 2
));
$ligne = $statement->fetch();
echo $ligne['title'] . '<br>';

$statement->execute(array(
    ':id_theme' => 1
));
$ligne = $statement->fetch();
echo $ligne['title'] . '<br>';