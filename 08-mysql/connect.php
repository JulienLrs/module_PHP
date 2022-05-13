<?php

/*
    Mode procédural mysqli
    Mode objet  PDO/mysqli
*/

// Parametres de connexion
define('HOST','localhost');  // server qui heberge la BDD
define('USER','root');
define('PASSWORD','');     
define('DBNAME','blog');     // Nom de la BDD sur laquelle je serais placé à la connexion

// Connexion
$mysqli = mysqli_connect(HOST,USER,PASSWORD,DBNAME);



?>