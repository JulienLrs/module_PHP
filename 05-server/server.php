<?php

// var_dump($_SERVER);
// $_SERVER nous donne des infos d'nevironnement du site en cours

echo "Reconstitution de l'url demandée : " . $_SERVER['REQUEST_SCHEME'] . '://' . 
$_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// http://localhost/coursphp/05-server/server.php

?>