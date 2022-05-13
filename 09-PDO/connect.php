<?php



define('HOST', 'localhost');  // server qui heberge la BDD
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'test');



$pdo = new PDO(
    'mysql:host=' . HOST . ';charset=utf8;dbname=' . DBNAME,
    USER,
    PASSWORD,
    array(
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    )
);



// <?php

// /*
//     Mode procédural mysqli
//     Mode objet PDO/mysqli
// */

// //Parametres
// define('HOST','localhost');
// define('USER','root');
// define('PASSWORD','root');
// define('DBNAME','blog');


// // Connexion
// $mysqli = mysqli_connect(HOST,USER,PASSWORD,DBNAME);

// $pdo = new PDO(
//     'mysql: host=' . HOST .';charset=utf8;dbname=' . DBNAME,
//     USER,
//     PASSWORD,
//     array(
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//     )
// );