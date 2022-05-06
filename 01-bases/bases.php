<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>module PHP - les bases</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    // La commande echo genere un affichage sur notre page
    echo '<h1>Hello World !</h1>';
    echo 'COURS PHP';



    ?>
    <hr>
    <h2>Variables : type/déclaration/affectation</h2>

    <?php

    // les variables PHP sont déclarées avec le symbole $ et doivent commencer par une lettre
    $a = 15;        // déclaration / affectation
    $b = 'texte';
    $c = true;

    echo $a;           // affichage du contenu de la variable $a
    echo '<br>';
    echo gettype($a);  // renvoie integer (nombre)
    echo '<br>';
    echo $b;
    echo '<br>';
    echo gettype($b);  // renvoie string (chaine de caractere)
    echo '<br>';
    echo $c;
    echo '<br>';
    echo gettype($c);  // renvoie un boolean

    // gettype = TypeOf en JS

    ?>



    <h2>Concaténation</h2>

    <?php

    $x = 'bonjour';
    $y = 'tout le monde';

    echo $x . ' ' . $y . '<br>'; // en PHP le "." est le symbole de la concaténation

    echo "<br>$x $y<br>";       // entre " " les variables sont interprétés
    echo '$x $y<br>';       // entre ' ' les variables deviennent des chaines de caractere

    // outils de debug  (a retirer uen fois le site terminé)
    // equivalent console.log de JS
    // var_dump($x);

    /*
    Créer 2 variable nom et prenom
    et afficher sur la page : Je m'appelle <prenom> <nom>
    */
    ?>


    <h2>Test</h2>

    <?php


    $pm = 'Julien';
    $nm = 'Larrouse';

    echo "Je m'appelle $pm $nm<br>";
    echo 'je m\'appelle ' . $pm . ' ' . $nm . '<br>';
    echo "je m'appelle " . $pm . ' ' . $nm . '<br>';


    // Dans certains cas, on utilisera la concaténation pour faire appel 
    // à des fonction sur les variables. (ex: strtoupper)
    echo 'je m\'appelle ' . ' ' . $pm . ' ' . strtoupper($nm) . '<br>';

    // Concaténation à l'affectation
    $phrase = 'Hello';
    $phrase .= ' tout le monde'; // on met a la suite de ce qu'il y a deja dans $phrase

    echo $phrase . '<br>';

    ?>



    <h2>Constantes et Constantes magiques</h2>

    <?php


    // define() permet de définir une constante
    // par convention les constantes sont écrites en majuscules
    define('CAPITALE', 'Paris');

    echo CAPITALE;

    // define('CAPITALE','Lyon'); Erreur , CAPITALE déjà déclarée
    // CAPITALE = 'Lyon';  Erreur, on ne peut pas faire suivre une constante du symbole =

    // Constante magiques : commencent et se terminent par 2 underscores
    echo __FILE__ . '<br>';  // affiche le chemion du fichier courant
    echo __DIR__ . '<br>';  // affiche le dossier physique
    echo __LINE__ . '<br>'; // renvoie la ligne de code courante

    /*
dossier physique : C:\xampp\htdocs\coursPHP
url : http://localhost/coursphp
*/
    ?>



    <h2>Opérateurs arithmétiques</h2>

    <?php

    $a = 10;
    $b = 2;
    echo $a + $b . '<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br>';    // modulo
    echo $a ** $b . '<br>';   // puissance
    echo pow($a, $b) . '<br>'; // puissance

    $c = 5;
    $d = 3;

    $c += $d; // $c = $c + $d => c vaut 8
    echo "c vaut $c<br>";

    // Si la valeur est 1
    $c += 1;
    // on peut écrire $c++ (incrémentation)
    $c++;

    // décrémentation
    $c -= 1;
    $c--;

    echo $a + $b * $a - $b . '<br>';
    echo ($a + $b) * ($a - $b) . '<br>'; // priorité mathématiques

    ?>



    <h2>Structures conditionnelles</h2>

    <?php

    $a = 10;
    $b = 5;
    $c = 2;

    // condition qui renvoie tjrs un boolean
    if ($a > $b) {
        echo "a est supérieur à b<br>";
    } else {
        echo "a n'est pas supérieur à b";
    }


    // structure if/esleif/else
    if ($a == 9) {
        echo "1 - a vaut 9<br>";
    } elseif ($a  != 10) {
        echo "2 - a est différent de 10<br>";
    } else {
        echo "3 - Aucune des deux conditions<br>";
    }

    // PLUSIEURS CONDITIONS

    // && = ET
    if ($a > $b && $b > $c) {
        echo "Ok pour les deux conditions<br>";
    }

    // || = OU inclusif
    if ($a == 9 || $b > $c) {
        echo "Ok pour au moins une des deux conditions<br>";
    }

    // XOR = OU exclusif (VRAI XOR VRAI = FAUX)
    if ($a == 9 xor $b > $c) {
        echo "OK pour une des deux conditions<br>";
    }


    $varA = 1;
    $varB = '1';

    if ($varA == $varB) {
        echo "C'est la meme chose<br>";
    }

    /*  = affectation
        == comparaison en valeur
        === comparaison en valeur et en type
        != différence en valeur
        !== différence en valeur et en type
    */
    var_dump(0 != false); // false : 0 n'est pas différent de false en valeur
    var_dump(0 !== false); // true : 0 est différent en type (integer contre boolean)

    // Fonctions empty() et isset()
    $var1 = 0;
    $var2 = '';

    if (empty($var1)) {
        echo "0, vide ou non définie<br>";
    }

    // Existence de la variable qui est controlée
    if (isset($var2)) {
        echo "var2 existe et est définie par une chaine vide<br>";
    }
    ?>



    <h2>Structures Switch</h2>

    <?php

    $couleur = 'jaune';

    switch ($couleur) {
        case 'indigo':
        case 'bleu':
            echo "vous aimez le bleu<br>";
            break;
        case 'rouge':
            echo "vous aimez le rouge<br>";
            break;
        case 'vert':
            echo "vous aimez le vert<br>";
            break;
        default:
            echo "Vous n'aimez ni le bleu, ni le rouge, ni le vert<br>";
    }

    /*
La fonction rand(min,max) renvoie un nombre aléatoire compris entre les 2 bornes min et max

générer une note aléatoire (0-10)
utiliser switch pour attribuer une lettre
0,1,2 => F
3,4,5 => E
6,7 => D
8 => C
9 => B
10 => A
*/

    $note = rand(0, 10);

    echo "Note obtenue : $note<br>";

    switch ($note) {
        case 0:
        case 1:
        case 2:
            $lettre = 'F';
            break;

        case 3:
        case 4:
        case 5:
            $lettre = 'E';
            break;

        case 6:
        case 7:
            $lettre = 'D';
            break;

        case 8:
            $lettre = 'C';
            break;
        case 9:
            $lettre = 'B';
            break;
        default:
            $lettre = 'A';
    }

    echo "Lettre obtenue : $lettre<br>";


    // FORMES CONTRACTEES

    // Forme ternaire
    $sexe = 'm';
    echo ($sexe == 'f') ? 'Bonjour Madame' : 'Bonjour Monsieur';
    //     condition    ?     si vrai              sinon

    $civilite = ($sexe == 'f') ? 'Madame' : 'Monsieur';

    ?>
    <input type="text" id="civilite" name="civilite" placeholder="<?php echo $civilite ?>">
    <hr>
    <?php


    $departement = 'Hauts de Seine';
    $pays = 'France';
    echo (isset($pays)) ? $pays : 'non precisé';

    echo "<hr>";

    // Forme contractée
    echo $pays ?? 'non précsié';
    echo "<hr>";
    echo $departement ?? $region ?? $pays ?? 'non précisé';

    ?>

    <h2>Fonctions prédéfinies</h2>

    <?php 
    
    /*
    gettype() renvoie le type d'une variable
    isset() test l'existence d'ue variable
    empty() test que la variale est vide, vaut 0 ou n'existe pas
    rand() genère un nombre aléatoire
    */

    // Dates
    date_default_timezone_set('Europe/Paris');
    echo date('l d/m/Y H:i:s');

    echo "<hr>";

    setlocale(LC_ALL, 'fr_FR.utf8', 'french_FRANCE.utf8','fra.utf8');
    echo strftime('%A %d %B %y');
    
    echo "<hr>";

    // Alternative
    $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL,
    IntlDateFormatter::LONG, 'Europe/Paris', IntlDateFormatter::GREGORIAN,'eeee dd MMM YYYY');
    echo $formatter->format(strtotime('202209-04'));

    // Afficher la version de PHP
    echo 'Ma version de PHP : ' . phpversion();
    ?>


</body>

</html>