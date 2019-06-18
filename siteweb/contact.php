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
                                <li><a href="./projet.php" alt="CV détaillé" tiltle="CV détaillé"><img class="icone" src ="image/projets.png" alt="Projets" title="Projets"><!--Projets--></a></li>
                                <li><img class="icone" src ="image/contact.png" alt="Me contacter" title="Me contacter"><!--Me contacter--></li>
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



                <!--Espace envoye message et coordoonnées-->
                <article>


                    <!--Espace envoye message-->
                    <div id = "message">
                        <br /><br /><br /><br />
                        <form method="POST" action="./php/envoyemsg.php" ><!----appelle modification base de donnes---->

                            <!--Espace contact(nom)-->
                            <label for="nom_client">Nom :</label><br />
                            <input type="text" id="name" name="nom_client"><br /><br /><br /><br />


                            <!--Espace contact(e-mail)-->
                            <label for="email">email :</label><br />
                            <input type="email" id="mail" name="email"><br /><br /><br /><br />


                            <!--Espace contact(sujet)-->
                            <label for="sujet">sujet :</label><br />
                            <input type="sujet" id="sujet" name="sujet"><br /><br /><br /><br />
                        
                            
                            <!--Espace contact(message)-->
                            <label for="le_message">Message :</label><br />
                            <textarea id="msg" name="le_message"></textarea>

                            <button type="submit" class="btn envoyer">Envoyer</button>

                        </form>

                    </div>


                    <!--trait de séparation-->
                    <div id="trait">
                        <hr color =#778899 width="1px" size="500px">
                    </div>


                    <!-- mes coordoonnées-->
                    <div id = "contact">

                        <?php
                        $reponse = $bdd->query('SELECT * FROM coordonnes');
                        while ($donnees = $reponse->fetch())
                        {
                        ?>

                        <p>Téléphone:<?php echo $donnees['telephone']; ?> <br /><br /> mail: <?php echo $donnees['mail']; ?><br /><br /> adresse: <?php echo $donnees['adresse']; ?> </p>

                            
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