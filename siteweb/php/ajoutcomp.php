<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['note']) && !empty($_POST['note']) && isset($_POST['competences']) && !empty($_POST['competences'])){

    $test = $bdd->prepare('INSERT INTO `competences`(`note`, `competences`) 
    VALUES (:note, :competences)');
    $test ->execute(array(
        ':note' => $_POST['note'], 
        ':competences' => $_POST['competences'],
    ));

    header('location:../parametre.php');
    exit();
}

?>