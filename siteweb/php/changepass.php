<?php
require_once('./insertionBDD.php');


$test2 = $bdd->prepare('UPDATE `visiteur` 
SET`pass_droit`= 1 
WHERE pass_id = 1');
$test2 ->execute();
header('location:../index.php');



?>