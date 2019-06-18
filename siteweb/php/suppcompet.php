<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['competences']) && !empty($_POST['competences'])){

    $test = $bdd->prepare('DELETE FROM `competences` WHERE `competences`= :competences');
    $test ->execute(array(
        ':competences' => $_POST['competences'],
    ));

    header('location:../parametre.php');
    exit();
}

?>