<!--Connexion BDD-->
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


            <!--Début du code de page avec le header-->
            <header>
                <div id=burger>
                    <img src ="image\burger.png" alt="burger" title="burger">
                </div>
                <?php
                    $reponse = $bdd->query('SELECT * FROM photo_profil');
                    while ($donnees = $reponse->fetch())
                    {
                ?>
                    <img  id=photo src = "<?php echo $donnees['photo_profil']; ?>" alt="photo_profil" title="photo de profil">
                <?php
                    }

                $reponse->closeCursor(); // Termine le traitement de la requête

                ?>
                <?php
                    $reponse = $bdd->query('SELECT * FROM mon_cv');
                    while ($donnees = $reponse->fetch())
                    {
                ?>
                    <h1><?php echo $donnees['prenom']; ?> <?php echo $donnees['nom']; ?></h1>
                <?php
                    }

                $reponse->closeCursor(); // Termine le traitement de la requête

                ?>
                <form method="POST" action="./connexion.php">
                <button type="submit" class="menuclick" id="deco"><img src ="image\deconnexion.png" alt="burger" title="deco"></button>
                </form>
            </header>


            <!--contenu page-->
            <section>



                <!--le menu de navigaton-->
                <aside>
                    <div id = menu>  
                        <nav id="menu">
                            <ul>
                                <li><a href="./index.php" alt="CV simple" tiltle="CV simple"><img class="icone" src ="image/CV_simple.png" alt="CV simple" title="CV simple"><!--CV simple--></a></li>
                                <li><a href="./cvdetaille.php" alt="CV détaillé" tiltle="CV détaillé"><img class="icone" src ="image/CV_détaillé.png" alt="CV détaillé" title="CV détaillé"><!--CV détaillé--></a></li>
                                <li><img class="icone" src ="image/projets.png" alt="Projets" title="Projets"><!--Projets--></li>
                                <li><a href="./contact.php" alt="Me contacter" tiltle="Me contacter"><img class="icone" src ="image/contact.png" alt="Me contacter" title="Me contacter"><!--Me contacter--></a></li>
                                <?php
                                $reponse = $bdd->query('SELECT pass_droit FROM visiteur');
                                while ($donnees = $reponse->fetch())
                                {
                                    if ($donnees['pass_droit']==2){
                                        ?>
                                        <li><a href="./parametre.php" alt="CV détaillé" tiltle="CV détaillé"><img class="icone" src ="image\parametre.png" alt="CV détaillé" title="CV détaillé"><!--Parametre du CV--></a></li>
                                        <?php    
                                    }
                                }
                                $reponse->closeCursor(); // Termine le traitement de la requête

                                ?>
                            </ul>
                        </nav>
                    </div>
                </aside>



                <!--les projets professionnelles-->
                <article id="Projetpro">
                    <h2>Projets professionnelles<br /><br /></h2>
                    <?php
                    $reponse = $bdd->query('SELECT * FROM projets_professionnelles');
                    while ($donnees = $reponse->fetch())
                    {
                     ?>
                        <div id="projetprofesio">
                        <h2><?php echo $donnees['nom_projets']; ?> <br />(id projet: <?php echo $donnees['projets_id']; ?>)</h2>
                        <img  id=photoprojet src = "<?php echo $donnees['photo']; ?>" alt="photoprojet" title="photoprojet">
                        <p>technologies utilisées:<br /><?php echo $donnees['technologies']; ?> <br /> depot git:<br /> <?php echo $donnees['depot_git']; ?><br />detail du projet:<br /> <?php echo $donnees['detail_projets']; ?> </p>
                        </div>
                        
                    <?php
                    }

                    $reponse->closeCursor(); // Termine le traitement de la requête

                    ?>   
                </article>



                <!--les projets personnelles-->
                <article id="Projetperso">
                    <h2>Projets personnelles<br /><br /></h2>
                    <?php
                    $reponse = $bdd->query('SELECT * FROM projets_personelle');
                    while ($donnees = $reponse->fetch())
                    {
                     ?>
                        <div id="projetprofesio">
                        <h2><?php echo $donnees['nom_projets']; ?> <br />(id projet: <?php echo $donnees['projets_perso_id']; ?>)</h2>
                        <img  id=photoprojet src = "<?php echo $donnees['photo']; ?>" alt="photo_profil" title="photo de profil">
                        <p>technologies utilisées:<br /><?php echo $donnees['technologies']; ?> <br /> depot git:<br /> <?php echo $donnees['depot_git']; ?><br />detail du projet:<br /> <?php echo $donnees['detail_projets']; ?> </p>
                        </div>
                        
                    <?php
                    }

                    $reponse->closeCursor(); // Termine le traitement de la requête

                    ?>  
                </article>



            </section>
        </div>
    </body>
</html>