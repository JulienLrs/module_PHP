<?php

// Démarrer une session ou récupérer une session existante
session_name('MONIDPERSO'); // Personnalise le cookie de session
session_start();
session_name('MONIDPERSO2'); // Personnalise le cookie de session
session_start();


/*
    session_start() :
        -créer un cookie qui contiendra l'ID de session attribuée
            ex : 8e5n72lf35np9trvg3jinjq9d2
        - créer un fichier coté serveur ( dont le nom contient l'ID de session)
          où seront inscrites les informations de session 
            > (par defaut: PHPSESSID)
            ex : sess_8e5n72lf35np9trvg3jinjq9d2
*/


$_SESSION['user'] = array();
$_SESSION['user']['login'] = 'Jay';
$_SESSION['user']['email'] = 'jay@yahoo.fr';

var_dump ($_SESSION);

// Detruire une session (effectif qu'a la fin du script)
session_destroy(); // on fera suivre d'une redirection

echo $_SESSION['user']['login'];

// Destruction partielle : destruction de variable
unset($_SESSION['user']);
var_dump ($_SESSION);

// Session (coté serveur) peut contenir des informations sensibles
// La seule chose que peut lire client par le cookie c'est le numéro de session


?>