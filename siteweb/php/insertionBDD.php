<?php
 $database_host = 'mysql:host=localhost;dbname=u420036520_yqyg;charset=UTF8';
 $database_user = 'u420036520_yqyg';
 $database_password ='uvaMuVysus';
 
 $bdd = new PDO($database_host, $database_user, $database_password);
$bdd->exec("SET CHARACTER SET utf8");

?>