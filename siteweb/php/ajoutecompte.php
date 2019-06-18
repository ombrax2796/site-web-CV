<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])){

    $test = $bdd->prepare('INSERT INTO `admin_cv`(`nom`, `mot_de_passe`) 
    VALUES (:nom, :mot_de_passe)');
    $test ->execute(array(
        ':nom' => $_POST['nom'], 
        ':mot_de_passe' => $_POST['mot_de_passe'],
    ));

    header('location:../connexion.php');
    exit();
}

?>