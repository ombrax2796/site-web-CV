<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['ecole']) && !empty($_POST['ecole']) && isset($_POST['diplome']) && !empty($_POST['diplome']) && isset($_POST['date_obtention']) && !empty($_POST['date_obtention'])){

    $test = $bdd->prepare('INSERT INTO `parcours_scolaire`(`ecole`, `diplome`, `date_obtention`) 
    VALUES (:ecole, :diplome, :date_obtention)');
    $test ->execute(array(
        ':ecole' => $_POST['ecole'], 
        ':diplome' => $_POST['diplome'],
        ':date_obtention' => $_POST['date_obtention'],
    ));

    header('location:../parametre.php');
    exit();
}

?>