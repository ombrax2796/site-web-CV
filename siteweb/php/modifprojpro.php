<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['nom_projets']) && !empty($_POST['nom_projets']) && isset($_POST['photo']) && !empty($_POST['photo']) && isset($_POST['photo']) && !empty($_POST['photo']) && isset($_POST['technologies']) && !empty($_POST['technologies']) && isset($_POST['detail_projets']) && !empty($_POST['detail_projets'])){

    $test = $bdd->prepare('UPDATE `projets_professionnelles` 
    SET `nom_projets`= :nom_projets, `photo`=:photo, `technologies`=:technologies, `depot_git`=:depot_git, `detail_projets`=:detail_projets 
    WHERE `projets_id` = :id');
    $test ->execute(array(
        ':id' => $_POST['id'],
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