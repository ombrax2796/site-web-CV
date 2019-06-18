<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['nom_projets']) && !empty($_POST['nom_projets']) && isset($_POST['photo']) && !empty($_POST['photo']) && isset($_POST['photo']) && !empty($_POST['photo']) && isset($_POST['technologies']) && !empty($_POST['technologies']) && isset($_POST['detail_projets']) && !empty($_POST['detail_projets'])){

    $test = $bdd->prepare('INSERT INTO `projets_professionnelles`(`nom_projets`, `photo`, `technologies`, `depot_git`, `detail_projets`) 
    VALUES (:nom_projets, :photo, :technologies, :depot_git, :detail_projets)');
    $test ->execute(array(
        ':nom_projets' => $_POST['nom_projets'],
        ':photo' => $_POST['photo'],
        ':technologies' => $_POST['technologies'], 
        ':depot_git' => $_POST['depot_git'], 
        ':detail_projets' => $_POST['detail_projets'] 
    ));

    header('location:../parametre.php');
    exit();
}

?>