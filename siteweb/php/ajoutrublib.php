<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['loisirs']) && !empty($_POST['loisirs'])){

    $test = $bdd->prepare('INSERT INTO `rubriques_libres`(`loisirs`) 
    VALUES (:loisirs)');
    $test ->execute(array(
        ':loisirs' => $_POST['loisirs'], 
    ));

    header('location:../parametre.php');
    exit();
}

?>