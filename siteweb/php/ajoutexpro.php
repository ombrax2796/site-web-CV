<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['entreprise']) && !empty($_POST['entreprise']) && isset($_POST['titre']) && !empty($_POST['titre']) && isset($_POST['date_debut']) && !empty($_POST['date_debut']) && isset($_POST['date_fin']) && !empty($_POST['date_fin']) && isset($_POST['detail']) && !empty($_POST['detail'])){

    $test = $bdd->prepare('INSERT INTO `experiences_professionnelles`(`entreprise`, `titre`, `date_debut`, `date_fin`, `detail`) 
    VALUES (:entreprise, :titre, :date_debut, :date_fin, :detail)');
    $test ->execute(array(
        ':entreprise' => $_POST['entreprise'], 
        ':titre' => $_POST['titre'],
        ':date_debut' => $_POST['date_debut'],
        ':date_fin' => $_POST['date_fin'],
        ':detail' => $_POST['detail']
    ));

    header('location:../parametre.php');
    exit();
}

?>