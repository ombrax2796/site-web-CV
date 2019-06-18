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
        <script type="text/javascript" src="monscript.js"></script>
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
                                <li><img class="icone" src ="image/CV_détaillé.png" alt="CV détaillé" title="CV détaillé"><!--CV détaillé--></li>
                                <li><a href="./projet.php" alt="Projets" tiltle="Projets"><img class="icone" src ="image/projets.png" alt="Projets" title="Projets"><!--Projets--></a></li>
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



                <!--les Expériences professionnelles-->
                <article id="expériences">
                    <h2>Expériences professionnelles<br /><br /></h2>
                    <div>
                        <nav>
                            <ul>
                                <!--Utilisation BDD partie compétences-->
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM experiences_professionnelles');
                                    while ($donnees = $reponse->fetch())
                                    {
                                        ?>
                                        <li class = "liste"><p>titre : <?php echo $donnees['titre']; ?> à <?php echo $donnees['entreprise']; ?>, <?php echo $donnees['détail']; ?>. <?php echo $donnees['date_debut']; ?> à <?php echo $donnees['date_debut']; ?></p></li>
                                        <?php
                                    }

                                    $reponse->closeCursor(); // Termine le traitement de la requête

                                ?>                                
                            </ul>
                        </nav>
                    </div>
                </article>



                <!--le parcour scolaire-->
                <article id="scolarité">
                    <h2>Parcours scolaire<br /><br /></h2>
                    <div>
                        <nav>
                            <ul>
                                <!--Utilisation BDD partie compétences-->
                                <?php
                                    $reponse = $bdd->query('SELECT * FROM parcours_scolaire');
                                    while ($donnees = $reponse->fetch())
                                    {
                                        ?>
                                        <li class = "liste"><p><?php echo $donnees['diplome']; ?>, <?php echo $donnees['ecole']; ?>, <?php echo $donnees['date_obtention']; ?><br /></p></li>
                                        <?php
                                    }

                                $reponse->closeCursor(); // Termine le traitement de la requête

                                ?>

                            </ul>
                        </nav>
                    </div>
                </article>


                <!--le graphique avec mes compétences-->
                <article id="compétences2">
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


                <!--les rubrique libre-->
                <article id="rubrique">
                    <h2>Loisirs/Centre d'intérêts<br /><br /></h2>
                    <div>
                        <nav>
                            <ul>
                                <!--Utilisation BDD partie rubrique libre-->
                                <?php
                                    $reponse = $bdd->query('SELECT loisirs FROM rubriques_libres');
                                    while ($donnees = $reponse->fetch())
                                    {
                                        ?>
                                        <li><p><?php echo $donnees['loisirs']; ?></p></li>
                                        <?php
                                    }

                                    $reponse->closeCursor(); // Termine le traitement de la requête

                                ?>  
                            </ul>
                        </nav>
                    </div>                  
                </article>



            </section>
        </div>
    </body>
</html>