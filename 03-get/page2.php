<?php 

var_dump($_GET);

echo $_GET['id_produit'];

/*
$_GET est une superglobale :

Toutes les superglobales :
    - sont des tableaux
    - sont accessibles de partout
    - commencent par un "_"
    - sont ecrites en MAJ
    - ont un role precis

    ici, $_GET récupere les infos qui transites dans l'URL apres le "?"
!!!! pas de données sensible en GET (mdp, cartes bleues, etc...)

*/

?>