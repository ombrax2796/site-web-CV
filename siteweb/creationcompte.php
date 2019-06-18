<?php 
require_once('./php/insertionBDD.php'); 
?>

<!DOCTYPE html>
<html>



    <!--On initialise la page et on la nomme-->
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="Css.css">
		<title>Mon CV</title>
    </head>


    <body>
        <div id= bloc_page>
            <form method="POST" action="./php/ajoutecompte.php" id="ajoutecompte"><!----appelle modification base de donnes---->

                <label for="nom"><b>nom</b></label>
                <input type="text" name="nom" required><br />

                <label for="mot_de_passe"><b>Mot de passe</b></label>
                <input type="text" name="mot_de_passe" required><br />

                <button type="submit" class="btn envoyer">Création du compte</button>
            </form>
        </div>
    </body>
</html>