<?php

require_once('connect.php');

$requete = "SHOW TABLES";

$result = mysqli_query($mysqli, $requete);
var_dump($result);

//$ligne = mysqli_fetch_assoc($result);
//var_dump($ligne);
// $ligne = mysqli_fetch_assoc($result);
// var_dump($ligne);

while ($ligne = mysqli_fetch_assoc($result)){
    //var_dump($ligne);
    echo $ligne['Tables_in_blog'] . '<br>';
}

echo '<hr>';

$requete ="SELECT *FROM themes";
$result = mysqli_query($mysqli, $requete);

// while ($ligne = mysqli_fetch_assoc($result)){
//     //var_dump($ligne);
//     echo $ligne['title'] . '<br>';
// }

$donnees = mysqli_fetch_all($result, MYSQLI_ASSOC);
var_dump($donnees);
?>

<select name="id_theme">
    <?php
    foreach($donnees as $ligne) {
        ?>
    <option value="<?php echo $ligne['id_theme'] ?>">
    <?php echo $ligne['title'] . '<br>'; ?>
    </option> 
    <?php
}
?>
</select>