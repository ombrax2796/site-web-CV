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
                                <li><img class="icone" src ="image\CV_simple.png" alt="CV simple" title="CV simple"><!--CV simple--></li>
                                <li><a href="./cvdetaille.php" alt="CV détaillé" tiltle="CV détaillé"><img class="icone" src ="image\CV_détaillé.png" alt="CV détaillé" title="CV détaillé"><!--CV détaillé--></a></li>
                                <li><a href="./projet.php" alt="Projets" tiltle="Projets"><img class="icone" src ="image\projets.png" alt="Projets" title="Projets"><!--Projets--></a></li>
                                <li><a href="./contact.php" alt="Me contacter" tiltle="Me contacter"><img class="icone" src ="image\contact.png" alt="Me contacter" title="Me contacter"><!--Me contacter--></a></li>
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


                <!--le graphique avec mes compétences-->
                <article id="compétences">
                    <h2>Compétences</h2>
                    <div id="graph">
                        <div>
                        <!--Utilisation BDD partie compétences-->
                            <?php
                                $reponse = $bdd->query('SELECT competences FROM competences');
                                while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                    <p><?php echo $donnees['competences']; ?>: </p>
                                    <?php
                                }

                                $reponse->closeCursor(); // Termine le traitement de la requête

                            ?>
                        </div>
                    </div>
                    <div id="trait1">
                        <hr color =#778899 width="1px" size="225px">
                    </div>
                    <div id="note">
                        <!--Utilisation BDD partie note-->
                        <?php
                            $reponse = $bdd->query('SELECT note FROM competences');
                            while ($donnees = $reponse->fetch())
                            {
                                ?>
                                <div style="background-color:#4169e1; width:<?php echo $donnees['note']; ?>00px; height:30px; border:1px solid black; text-align:center;" ><?php echo $donnees['note']; ?></div>
                                <?php
                            }

                            $reponse->closeCursor(); // Termine le traitement de la requête

                        ?>                         
                    </div>


                </article>



            </section>
        </div>
    </body>
</html>