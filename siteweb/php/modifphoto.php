<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['photo_profil']) && !empty($_POST['photo_profil'])){

    $test = $bdd->prepare('UPDATE `photo_profil` 
    SET `photo_profil`= :photo_profil,
    WHERE `photos_id` = 1');
    $test ->execute(array(
        ':photo_profil' => $_POST['photo_profil'],
    ));

    header('location:../parametre.php');
    exit();
}

?>

