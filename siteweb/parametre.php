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
                                <li><a href="./cvdetaille.php" alt="CV détaillé" tiltle="CV détaillé"><img class="icone" src ="image\CV_détaillé.png" alt="CV détaillé" title="CV détaillé"><!--CV détaillé--></a></li>
                                <li><a href="./projet.php" alt="Projets" tiltle="Projets"><img class="icone" src ="image\projets.png" alt="Projets" title="Projets"><!--Projets--></a></li>
                                <li><a href="./contact.php" alt="Me contacter" tiltle="Me contacter"><img class="icone" src ="image\contact.png" alt="Me contacter" title="Me contacter"><!--Me contacter--></a></li>
                                <li><img class="icone" src ="image\parametre.png" alt="CV détaillé" title="CV détaillé"><!--Parametre du CV--></li>
                            </ul>
                        </nav>
                    </div>
                </aside>


                <!------------------------------------------Creer/modifier page cv simple------------------------------------------------------>
                <article id="modifcvsimple">
                    <h2>cv simple<br /></h2>
                    <!----------------------Bouton modifier photo---------------------------->
                    <button class="open-button" onclick="opmodphoto()">Modifier photo</button>

                    <!--Son popup-->
                    <div class="form-popup" id="popupphoto">
                    <form method="POST" action="./php/modifphoto.php" class="form-container"><!----appelle modification base de donnes---->

                        <label for="photo_profil"><b>Photo</b></label>
                        <input type="text" name="photo_profil" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clmodphoto()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opmodphoto() {
                            document.getElementById("popupphoto").style.display = "block";
                        }

                        function clmodphoto() {
                            document.getElementById("popupphoto").style.display = "none";
                        }
                    </script>
                    
                    

                     <!---------------------Bouton Ajouter competence------------------------->
                     <button class="open-button" onclick="opcomp()">Ajouter competence</button>

                    <!--Son popup-->
                    <div class="form-popup" id="competence">
                    <form method="POST" action="./php/ajoutcomp.php" class="form-container">

                        <label for="note"><b> note</b></label>
                        <input type="text" name="note" required>

                        <label for="competences"><b> competences</b></label>
                        <input type="text" name="competences" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clcomp()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opcomp() {
                            document.getElementById("competence").style.display = "block";
                        }

                        function clcomp() {
                            document.getElementById("competence").style.display = "none";
                        }
                    </script>



                    <!----------------------Bouton supprimer compétence---------------------------->
                    <button class="open-button" onclick="opsuppcomp()">Supprimer competence</button>



                    <div class="form-popup" id="suppcomp">
                    <form method="POST" action="./php/suppcompet.php" class="form-container"><!----appelle modification base de donnes---->

                        <label for="competences"><b>Nom compétences a supprimer</b></label>
                        <input type="text" name="competences" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clsuppcomp()">Annuler</button>
                    </form>
                    </div>                    
                    
                    <!--Son script-->
                    <script>
                        function opsuppcomp() {
                            document.getElementById("suppcomp").style.display = "block";
                        }

                        function clsuppcomp() {
                            document.getElementById("suppcomp").style.display = "none";
                        }
                    </script>


                </article>


                <!----------------------------Creer/modifier page cv détaillé------------------------------------------------->
                <article id="modifcvdetail">
                    <h2>cv détaillé<br /></h2>




                    <!------------------------Bouton Ajouter expérience professionnelle---------------------------->
                    <button class="open-button" onclick="opajoutexpro()">Ajouter expérience professionnelle</button>

                    <!--Son popup-->
                    <div class="form-popup" id="exppro">
                    <form method="POST" action="./php/ajoutexpro.php" class="form-container">

                        <label for="entreprise"><b> entreprise</b></label>
                        <input type="text" name="entreprise" required>

                        <label for="titre"><b> titre</b></label>
                        <input type="text" name="titre" required>

                        <label for="date_debut"><b> date_debut</b></label>
                        <input type="text" placeholder="AAAA/MM/DD ex:2003/01/22" name="date_debut" required>

                        <label for="date_fin"><b> date_fin</b></label>
                        <input type="text" placeholder="AAAA/MM/DD ex:2003/01/22" name="date_fin" required>

                        <label for="detail"><b> detail</b></label>
                        <input type="text" name="detail" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clajoutexpro()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opajoutexpro() {
                            document.getElementById("exppro").style.display = "block";
                        }

                        function clajoutexpro() {
                            document.getElementById("exppro").style.display = "none";
                        }
                    </script>
                    
                    


                    <!-------------------------Bouton Ajouter parcours scolaire------------------------>
                    <button class="open-button" onclick="opscolaire()">Ajouter parcour scolaire</button>

                    <!--Son popup-->
                    <div class="form-popup" id="scolaire">
                    <form method="POST" action="./php/ajoutparsco.php" class="form-container">

                        <label for="ecole"><b> ecole</b></label>
                        <input type="text" name="ecole" required>

                        <label for="diplome"><b> diplome</b></label>
                        <input type="text" name="diplome" required>

                        <label for="date_obtention"><b> date_obtention</b></label>
                        <input type="text" placeholder="AAAA/MM/DD ex:2003/01/22" name="date_obtention" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clscolaire()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opscolaire() {
                            document.getElementById("scolaire").style.display = "block";
                        }

                        function clscolaire() {
                            document.getElementById("scolaire").style.display = "none";
                        }
                    </script>  
   


                     <!----------------------Bouton Ajouter rubriques libre------------------------>
                     <button class="open-button" onclick="oplois()">Ajouter rubriques libre</button>

                    <!--Son popup-->
                    <div class="form-popup" id="loisirs">
                    <form method="POST" action="./php/ajoutrublib.php" class="form-container">

                        <label for="loisirs"><b> loisirs</b></label>
                        <input type="text" name="loisirs" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="cllois()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function oplois() {
                            document.getElementById("loisirs").style.display = "block";
                        }

                        function cllois() {
                            document.getElementById("loisirs").style.display = "none";
                        }
                    </script>


                    <!----------------------Bouton supprimer rubriques libre---------------------------->
                    <button class="open-button" onclick="opsupplois()">Supprimer rubrique libre</button>



                    <div class="form-popup" id="supplois">
                    <form method="POST" action="./php/supplois.php" class="form-container"><!----appelle modification base de donnes---->

                        <label for="loisirs"><b>Nom loisirs a supprimer</b></label>
                        <input type="text" name="loisirs" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clsupplois()">Annuler</button>
                    </form>
                    </div>                    
                    
                    <!--Son script-->
                    <script>
                        function opsupplois() {
                            document.getElementById("supplois").style.display = "block";
                        }

                        function clsupplois() {
                            document.getElementById("supplois").style.display = "none";
                        }
                    </script>

                </article>




                <!-------------------------------------Creer/modifier page projet--------------------------------------->
                <article id="modifprojet">
                    <h2>page projet<br /></h2>



                    
                    <!-------------------------Bouton Ajouter un projet professionnelle-------------------------->
                     <button class="open-button" onclick="opajoutpropro()">Ajouter projet professionnelle</button>

                    <!--Son popup-->
                    <div class="form-popup" id="ajoutprojet_professionnelle">
                    <form method="POST" action="./php/ajoutprojpro.php" class="form-container">

                        <label for="nom_projets"><b> nom projets</b></label>
                        <input type="text" name="nom_projets" required>

                        <label for="photo"><b> photo</b></label>
                        <input type="text" name="photo" required>

                        <label for="technologies"><b> technologies</b></label>
                        <input type="text" name="technologies" required>

                        <label for="depot_git"><b> depot git</b></label>
                        <input type="text" name="depot_git" required>

                        <label for="detail_projets"><b> detail projets</b></label>
                        <input type="text" name="detail_projets" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clajoutpropro()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opajoutpropro() {
                            document.getElementById("ajoutprojet_professionnelle").style.display = "block";
                        }

                        function clajoutpropro() {
                            document.getElementById("ajoutprojet_professionnelle").style.display = "none";
                        }
                    </script>





                     <!---------------------Bouton Modifier un projet professionnelle-------------------------->
                     <button class="open-button" onclick="opmopropro()">Modifier projet professionnelle</button>

                    <!--Son popup-->
                    <div class="form-popup" id="projet_professionnelle">
                    <form method="POST" action="./php/modifprojpro.php" class="form-container">

                        <label for="id"><b> ID projet a modifier?</b></label>
                        <input type="text" name="id" required>                       

                        <label for="nom_projets"><b> new nom projets</b></label>
                        <input type="text" name="nom_projets" required>

                        <label for="photo"><b> new photo</b></label>
                        <input type="text" name="photo" required>

                        <label for="technologies"><b> new technologies</b></label>
                        <input type="text" name="technologies" required>

                        <label for="depot_git"><b> new depot git</b></label>
                        <input type="text" name="depot_git" required>

                        <label for="detail_projets"><b> new detail projets</b></label>
                        <input type="text" name="detail_projets" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clamopropro()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opmopropro() {
                            document.getElementById("projet_professionnelle").style.display = "block";
                        }

                        function clamopropro() {
                            document.getElementById("projet_professionnelle").style.display = "none";
                        }
                    </script>



                    <!-------------------------Bouton Ajouter un projet professionnelle------------------------>
                     <button class="open-button" onclick="opajoutproperso()">Ajouter projet personnelle</button>

                    <!--Son popup-->
                    <div class="form-popup" id="ajoutprojet_personnelle">
                    <form method="POST" action="./php/ajoutprojperso.php" class="form-container">

                        <label for="nom_projets"><b> nom projets</b></label>
                        <input type="text" name="nom_projets" required>

                        <label for="photo"><b> photo</b></label>
                        <input type="text" name="photo" required>

                        <label for="technologies"><b> technologies</b></label>
                        <input type="text" name="technologies" required>

                        <label for="depot_git"><b> depot git</b></label>
                        <input type="text" name="depot_git" required>

                        <label for="detail_projets"><b> detail projets</b></label>
                        <input type="text" name="detail_projets" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clajoutproperso()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opajoutproperso() {
                            document.getElementById("ajoutprojet_personnelle").style.display = "block";
                        }

                        function clajoutproperso() {
                            document.getElementById("ajoutprojet_personnelle").style.display = "none";
                        }
                    </script>





                     <!-------------------Bouton Modifier un projet personnelle------------------------------>
                     <button class="open-button" onclick="opmoproperso()">Modifier projet personnelle</button>

                    <!--Son popup-->
                    <div class="form-popup" id="projet_personnelle">
                    <form method="POST" action="./php/modifprojperso.php" class="form-container">

                        <label for="id"><b> ID projet a modifier?</b></label>
                        <input type="text" name="id" required>   

                        <label for="nom_projets"><b> nom projets</b></label>
                        <input type="text" name="nom_projets" required>

                        <label for="photo"><b> photo</b></label>
                        <input type="text" name="photo" required>

                        <label for="technologies"><b> technologies</b></label>
                        <input type="text" name="technologies" required>

                        <label for="depot_git"><b> depot git</b></label>
                        <input type="text" name="depot_git" required>

                        <label for="detail_projets"><b> detail projets</b></label>
                        <input type="text" name="detail_projets" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clmoproperso()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opmoproperso() {
                            document.getElementById("projet_personnelle").style.display = "block";
                        }

                        function clmoproperso() {
                            document.getElementById("projet_personnelle").style.display = "none";
                        }
                    </script>
                </article>
                
                
                
                <!---------------------------------Creer/modifier page me contacter------------------------------------>
                <article id="modifcontact">
                    <h2>page me contacter<br /></h2>

                     <!------------------Bouton Ajouter rubriques libre-------------------------->
                     <button class="open-button" onclick="opcoordo()">Modifier coordonnes</button>

                    <!--Son popup-->
                    <div class="form-popup" id="coordonnes">
                    <form method="POST" action="./php/modifcoord.php" class="form-container">

                        <label for="telephone"><b> telephone</b></label>
                        <input type="text" name="telephone" required>

                        <label for="mail"><b> mail</b></label>
                        <input type="text" name="mail" required>

                        <label for="adresse"><b> adresse</b></label>
                        <input type="text" name="adresse" required>

                        <button type="submit" class="btn envoyer">Envoyer</button>
                        <button type="submit" class="btn cancel" onclick="clcoordo()">Annuler</button>
                    </form>
                    </div>

                    <!--Son script-->
                    <script>
                        function opcoordo() {
                            document.getElementById("coordonnes").style.display = "block";
                        }

                        function clcoordo() {
                            document.getElementById("coordonnes").style.display = "none";
                        }
                    </script>
                </article>                
            </section>
        </div>
    </body>
</html>    