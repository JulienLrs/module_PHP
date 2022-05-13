<?php 

// setCookie() permet de poser un cookie via php
// la superglobale $_COOKIE permet de les lire

$expiration = 15 * 24 * 3600; // 15 jours exprimé en seconde ²(15 jours * 24 heures * 3600 secondes)
setCookie('pays','France', time() + $expiration, '/'); // on met '/' pour rendre accessible le cookie sur tous les dossiers du nom de domaine
setCookie('pays','France', time() + $expiration);      // par defaut le chemin d'acces est le chemin courant


// 1ere solution
// $infos = new StdClass();
// $infos->pays = 'France';
// $infos->langue = 'fr';
// $infos->heure = 'GMT+2';


// 2eme solution
$infos = [
    'pays' => 'France',
    'langue' => 'fr',
    'heure' => 'GMT+2'
];

setCookie('infos', json_encode($infos), time() + $expiration, '/'); 


var_dump($_COOKIE);


$recup = json_decode( $_COOKIE['infos'] );
echo $recup->langue;
// Pas de données sensible dans un cookie, on est coté client

?>