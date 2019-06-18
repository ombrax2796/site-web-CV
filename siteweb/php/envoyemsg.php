<?php 
require_once('./insertionBDD.php'); 
if (isset($_POST['nom_client']) && !empty($_POST['nom_client']) && isset($_POST['email']) && !empty($_POST['email']) &&  isset($_POST['sujet']) && !empty($_POST['sujet']) &&  isset($_POST['le_message']) && !empty($_POST['le_message'])){
    $test = $bdd->prepare('INSERT INTO `mes_message`(`nom_client`, `email`, `sujet`, `le_message`) 
    VALUES (:nom_client, :email, :sujet, :le_message)');
    $test ->execute(array(
        ':nom_client' => $_POST['nom_client'], 
        ':email' => $_POST['email'],
        ':sujet' => $_POST['sujet'],
        ':le_message' => $_POST['le_message'],
    ));

    header('location:../contact.php');
    exit();
}

?>