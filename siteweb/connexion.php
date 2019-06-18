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
        <div id= bloc_page_connexion>
            <form method="POST" action="./php/verifcompte.php"><!----appelle modification base de donnes---->

                <label for="nom"><b>nom</b></label>
                <input type="text" name="nom" required>

                <label for="mot_de_passe"><b>Mot de passe</b></label>
                <input type="password" name="mot_de_passe" required>

                <button type="submit" class="btn envoyer">Se connecter</button>

            </form>

            <form method="POST" action="./creationcompte.php">
                <button type="submit" class="btn envoyer">Créer compte</button>
            </form>

            <form method="POST" action="./php/changepass.php">
                <button type="submit" class="btn envoyer">Visiteur</button>
            </form>

        </div>
    </body>
</html>