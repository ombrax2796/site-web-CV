<?php
require_once('./insertionBDD.php');
if(isset($_POST['nom']) && isset($_POST['mot_de_passe']))
{
    $test =$bdd->prepare("SELECT `mot_de_passe` FROM `admin_cv` where `nom` = :nom ");
    $test->bindParam(':nom', $_POST["nom"]);
    $test->execute();
    $result = $test->fetch();
    $hash = $result[0];


	
    if($hash == $_POST['mot_de_passe']){
        $test2 = $bdd->prepare('UPDATE `visiteur` 
        SET`pass_droit`= 2 
        WHERE pass_id = 1');
        $test2 ->execute();
        header('location:../index.php');
    }
    else{
        echo"error";
    }
}


?>