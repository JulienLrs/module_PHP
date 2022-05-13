<?php

var_dump($_FILES);

if (!empty($_FILES['fichier']['name'])) {
    $erreurs = [];
    //un fichier a été choisi
    $typesmimes_autorises = ['image/jpeg', 'image.png'];
    if (!in_array($_FILES['fichier']['type'], $typesmimes_autorises)) {
        $erreurs[] = 'Format non autorisé - Merci de choisir un fichier JPEG ou PNG';
    }
    if ($_FILES['fichier']['size'] == 0) {
        $erreurs[] = 'Le fichier est vide';
    }

    if(empty($erreurs)){
        //fichier OK (format et taille)
        $dossier = $_SERVER['DOCUMENT_ROOT'] . '/courPHP/04-post-files/photos/';
        //ou
        $dossier = __DIR__ . '/photos/';
        $nomfichier = uniqid() . '_' . $_FILES['fichier']['name'];

        move_uploaded_file($_FILES['fichier']['tmp_name'],$dossier. $nomfichier);
        //ou
        // copy($_FILES['fichier']['tmp_name'],$dossier. $nomfichier);


    }






}
else {
    $erreurs[] = 'Merci de choisir un fichier';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire 2 : Upload</title>
</head>

<body>
    <?php if (!empty($erreurs)) : ?>
        <div class="erreur"><?php echo implode('<br>', $erreurs) ?></div>
    <?php endif; ?>
    <!-- Si votre formulmaire contient un input de type file il faut ajouter l'attribut enctype="multipart/form-data" -->
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Ajouter un photo</h2>
        <input type="file" id="fichier" name="fichier" accept="image/jpeg,image.png">
        <button type="submit">Envoyer</button>

    </form>

    <hr>

    <?php 
    
    $photos = glob("photos/*.{jpg,png,jpeg}",GLOB_BRACE);
    //var_dump($photos);
    if (count($photos) == 0) {
        ?>
        <p>Pas encore de photos dans la galerie</p>
        <?php
    } else {

    foreach($photos as $photo):
        ?>
        <img src="<?php echo $photo ?>" alt="">
        <?php
        endforeach;
    }
    
    ?>


</body>

</html>