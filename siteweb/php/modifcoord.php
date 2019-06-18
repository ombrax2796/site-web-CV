<?php 
require_once('./insertionBDD.php'); 

if (isset($_POST['telephone']) && !empty($_POST['telephone']) && isset($_POST['mail']) && !empty($_POST['mail']) && isset($_POST['adresse']) && !empty($_POST['adresse'])){

    $test = $bdd->prepare('UPDATE `coordonnes` 
    SET `telephone`= :telephone, `mail`=:mail, `adresse`=:adresse 
    WHERE `coordonnes_id` = 1');
    $test ->execute(array(
        ':telephone' => $_POST['telephone'],
        ':mail' => $_POST['mail'],
        ':adresse' => $_POST['adresse'], 
    ));

    header('location:../parametre.php');
    exit();
}

?>