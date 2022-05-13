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


    $pm = 'Poupi';
    $nm = 'Poupeh';

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

    // DATES
    date_default_timezone_set('Europe/Paris');
    echo date('l d/m/Y H:i:s');

    echo "<hr>";

    setlocale(LC_ALL, 'fr_FR.utf8', 'french_FRANCE.utf8', 'fra.utf8');
    echo strftime('%A %d %B %y');

    echo "<hr>";

    // ALTERNATIVE
    $formatter = new IntlDateFormatter(
        'fr_FR',
        IntlDateFormatter::FULL,
        IntlDateFormatter::LONG,
        'Europe/Paris',
        IntlDateFormatter::GREGORIAN,
        'eeee dd MMM YYYY'
    );

    echo $formatter->format(time()) . "<br>"; // date du jour
    // time()renvoie le timestamp de la date/heure courante
    // timestamp : nbre de seconde qui nous séparent du 01/01/1970 00:00:00    

    echo $formatter->format(strtotime('1987-05-08 16:50:00')) . "<br>";
    // strtotime fabrique un timestamp à partir d'une date en clair


    // NOMBRES

    // Format monétaire
    echo number_format(10.2, 2, ',', ' ') . '€';
    //                (nbre,nbre_de_decimales,séparateur_de_décimales,
    //                 séparateur_de_milliers)  


    // Arrondis
    echo "<br>";
    echo round(2.6) . '<br>'; // 3, arrondi à l'entier le plus proche
    echo floor(2.6) . '<br>'; // 2, arrondi à l'entier inférieur
    echo ceil(2.6) . '<br>'; // 3, arrondi à l'entier supérieur

    echo round(3.1234534, 2) . '<br>'; // arrondi avec une précision sur le nbre de décimales à concerver

    // Nombre aléatoire
    echo "<br>";
    echo 'Nombre aléatoire entre 1 et 6 : ' . rand(1, 6);

    echo "<hr>";

    // Chaines de caractères
    echo iconv_strlen('Bonjour Poupi');
    echo "<br>";

    $email = 'poupi.poupeh@gmail.com';
    echo "l'arobase se trouve à la position " . strpos($email, '@') . '<br>';
    var_dump(strpos($email, 'k'));
    echo "<br>";

    // strpos() renvoie la position d'une chaine dans une autre (on commence à 0 pour la premiere lettre)
    // si la chaine n'est pas trouvée, strpos() renvoie false


    echo substr($email, 13) . '<br>';  // substr(chaine,départ)
    echo substr($email, 13, 5) . '<br>'; // substr(chaine,départ,longueur)

    // il existe la fonction strrpos() fait la meme chose que strpos mais en partant de la fin de la chaine
    // exemple :
    echo strpos($email, '.') . '<br>'; // point en partant du début (premiere occurence)
    echo strrpos($email, '.') . '<br>'; // point en partant de la fin (derniere occurence)

    ?>

    <h2>Fonctions Utilisateurs</h2>

    <?php

    function salut($prenom = 'tout le monde')
    {
        return "Bonjour $prenom !<br>"; // renvoie la chaine à l'endroit ou la fonction est appelée
    }  // $prenom est une variable locale a la fonction

    echo salut('Poupinette'); // appel de la fonction
    echo salut('Dany');
    $bienvenue = salut('Jay');
    echo $bienvenue;

    echo salut(); // sans parametre, la fonction va utiliser la valeur par defaut


    // exemple : $prix est obligatoire, $taux est optionnel
    function calculTVA($prix, $taux = 20)
    { // taux par défaut 20% appliqué
        return $prix * (1 + $taux / 100);
    }

    echo calculTVA(100) . '<br>';
    echo calculTVA(100, 5.5) . '<br>';
    echo calculTVA(350) . '<br>';


    // TYPAGE (informatif pour les autres devs)
    // depuis PHP 7, on peut typer les parametres et la sortie de la fonction
    function calculTVA2(float $prix, float $taux = 20): float
    {
        return $prix * (1 + $taux / 100);
    }  // servent aux dev, savent à quoi s'attendre 


    // autre exemple de typage
    function isMajeur(int $age): bool
    {
        return ($age >= 18);
    }

    // exemple d'utilisation de la fonction dans une condition
    if (isMajeur(17)) {
        echo "Il est majeur<br>";
    } else {
        echo "Il est mineur<br>";
    }


    // Espaces global et local

    $animal = 'Loup';
    function afficheAnimal()
    {
        $animal = 'Lion';
        return $animal;
    }
    echo $animal . '<br>';
    echo afficheAnimal() . '<br>';
    echo $animal . '<br>';

    $pays = 'France';
    function affichagePays()
    {
        global $pays; // mot clé "global" rend accessible une variable globale dans l'espace local de la fonction
        // $pays = 'Belgique';
        return $pays;
    }
    echo affichagePays() . '<br>';
    $pays = 'Japon';
    echo affichagePays() . '<br>';



    define('URL', 'https://monsite.com');

    function afficheURL()
    {
        return URL;
    }
    echo afficheURL();

    ?>

    <h2>Structures Itératives : Boucles</h2>

    <?php
    /* 
        1 - Situation de départ
        2 - Condition qui fait tourner la boucle
        3 - Incrémentation qui fait évoluer la situation de départ
    */


    // BOUCLE WHILE
    $i = 1;           // Point 1 (point de départ)
    // Boolean    
    while ($i <= 5) { // Point 2
        echo "$i ";
        $i++;        // Point 3
    }

    // BOUCLE FOR
    //     Pt1     Pt2     Pt3
    for ($i = 1; $i <= 5; $i++) {  // Je pars de 1; tant qu'il est inférieur ou = a 5; je lui rajoute 1
        echo "$i ";
    }

    // BOUCLE DO/WHILE
    $i = 6;
    do {
        echo "$i ";
        // cette ligne de code sera exec au moins 1x
    } while ($i <= 5); // condition testée apres l'exec de ce qu'il y a dans le do{}
    ?>

    <select name="annee">
        <?php for ($annee = 2022; $annee >= 1922; $annee--): ?> 
        <option><?php echo $annee; ?></option>
        <?php endfor; ?>
    </select>

    <?php

            if($a > $b):
                // code
            else :
                // code
            endif;
            


            // Générer une liste a puces affichant un comptage de 10 en 10 jusqu'a 100
            ?>

        
        <ul>
            <?php 
                for ($liste = 10; $liste <= 100; $liste+=10):?>
                <li><?php echo $liste; ?></li>
                <?php endfor; 
            ?>
        </ul>
        
    <?php
    // BOUCLES IMBRIQUEES
       $lignes = 8;
       $colonnes = 8;
    ?>
       <table>
           <?php for($i = 1; $i <= $lignes; $i++) : ?>
                <tr>
                    <?php for($j = 1; $j <= $colonnes; $j++): ?>
                        <td></td>
                        <?php endfor; ?>
                </tr>
                <?php endfor; ?>
       </table>
    <h2>Inclusion d'un Fichier</h2>
    <?php
    echo "Premiere inclusion";
    include('fichier_inclus.php');
    echo "Deuxieme inclusion";
    include_once('fichier_inclus.php'); // inclus une seule fois le fichier

    echo "<br>Troisieme inclusion :";
    require('fichier_inclus.php');
    echo "Quatrieme inclusion";
    require_once('fichier_inclus.php');

?>

<h2>Inclusion d'un Fichier</h2>

<?php

$tableau = ['element1', 'element2', 'element3'];

echo "<pre>";
var_dump($tableau);
echo "</pre>";

echo $tableau[1] . '<br>'; // j'affiche la valeur de l'element qui a pour index 1

$heros = array('Batman','Catwoman','Superman','Wonder Woman');

echo $heros[2]. '<br>';

$nb_heros = sizeof($heros);
echo "Il y a $nb_heros héros dans le tableau<br>";

// On parcoure le tableau avec une boucle for
for($i = 0; $i < $nb_heros; $i++ ){
    echo $heros[$i]. '<br>';
}

$personnage = array(   //  => est une fleche d'association entre l'index (nom, prenom, surnom) et la valeur (Bruce, Wayne, Batman)
    "id_perso" => 53,
    "nom" => "Wayne",
    "prenom" => "Bruce",
    "surnom" => "Batman"
);
var_dump($personnage);
echo "<br>";
echo $personnage['prenom'];

echo "<hr>";
// BOUCLE foreach()
// $idx et $valeur sont des variables d'accueil et fonction
foreach($personnage as $idx => $valeur){
    echo "$idx : $valeur<br>";
}

echo "<hr>";
foreach($personnage as $valeur){
    echo "$valeur <br>";
}

// TABLEAUX A PLUSIEURS DIMENSIONS

$individus = array(

    array('Jean','Dupond'),
    array('Martine','Durrand'),
    array ('Jacques','Lalande')
);

var_dump($individus);
echo $individus[1][1];


echo "<br>";
$individus = array(
    array(
        'id' => 112,
        'prenom' => 'Jean',
        'nom' => 'Dupond'
    ),
    array(
        'id' => 112,
        'prenom' => 'Martine',
        'nom' => 'Durrand'
    ),
    array(
        'id' => 112,
        'prenom' => 'Jacques',
        'nom' => 'Lalande'
    ),
);

var_dump($individus);
    echo $individus[1]['nom'];


    file_put_contents('export.csv','id;prenom;nom' . PHP_EOL);

    foreach ($individus as $key => $value) {

        $ligne = $individus[$key]['id'] . ';' . $individus[$key]['prenom'] . ';'
            . $individus[$key]['nom'];

        file_put_contents('export.csv', $ligne . PHP_EOL, FILE_APPEND);
    }

?>

    <a href="export.csv" download>Télécharger l'export</a>

<?php 

// AJOUR D'ELEMENT

// option 1
$heros[] = 'Joker';  // ajout d'un élément en fin de tableau
// option 2
array_push($heros, 'Pingouin');
echo "<br>";

var_dump($heros);
echo "<br>";

// RECHERCHE D'ELEMENT

$position_flash = array_search('Flash', $heros);
echo "Flash se trouve à l'index $position_flash ";
echo "<br>";

var_dump( array_search('Spider Man', $heros));
echo "<br>"; // array_search renvoie le boolean false s'il ne trouve pas l'element

// controle d'existence d'un élément dans mon tableau
var_dump( in_array('Batman', $heros));
echo "<br>"; // in_array(element, tableau)


//implode(), explode(), list()

$liste_heros = implode(', ',$heros); // tableau >>> chaine de caracteres
echo $liste_heros;
echo "<br>";

// arra_keys(tableau) => renvoie a un autre tablea avec uniquement les indexs

$dateA = '2022-05-09';
$tableau = explode('-',$dateA);
var_dump($tableau);
echo "<br>";


list($annee,$mois,$jour) = $tableau;
echo "$jour/$mois/$annee<br>";

list($annee,$mois) = $tableau;
echo "$mois/$annee<br>";

list(,$mois,$jour) = $tableau;
echo "$jour/$mois<br>";


// array_rand() renvoie un index aleatoire du tableau
$index_au_hasard = array_rand($heros);
echo "L'index récupéré est le $index_au_hasard <br>";
echo $heros[$index_au_hasard];


?>

<h2>Les objets</h2>

<?php 
// En objet, on parle de propriété => variable PHP
//           on parle de méthode   => function PHP

class Telephone{
    
    //     propriétés
    public $marque ='Apple';
    public $modele ='Iphone';
    public $couleur;

    public function __construct($couleurchoisie){ // constructeur
        $this ->couleur = $couleurchoisie; // designe l'objet courant (en cours d'utilisation)
    }

    //     méthodes
    public function telephoner(){
        // ...
        return 'Je téléphone...<br>';
    }

    public function prendrePhoto(){
        // ...
        return 'Voici la photo<br>';
    }
}

$iphone1 = new Telephone('blanc'); // instanciation de la classe Telephone(on produit un objet)
var_dump($iphone1);
echo "<br>";

echo $iphone1 -> modele . '<br>'; // -> est le symbole d'appartenance pour les objets

echo $iphone1->prendrePhoto();

var_dump(get_class_methods('mysqli')); // differente methode dispo




?>

</body>

</html>