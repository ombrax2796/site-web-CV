DROP TABLE IF EXISTS admin_cv ;/*creation table "admin cv"*/

CREATE TABLE admin_cv 
   ( cv_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , nom VARCHAR(50) NOT NULL /*Colonne login*/
   , mot_de_passe VARCHAR(50) NOT NULL/*Colonne MDP*/
   , PRIMARY KEY (cv_id)
   )
   CHARACTER SET 'utf8';

DROP TABLE IF EXISTS visiteur ;/*creation table "visiteur"*/

CREATE TABLE visiteur 
   (  
      pass_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
      ,pass_droit INT NOT NULL/*Colonne pass*/
      , PRIMARY KEY (pass_id)
   )
   CHARACTER SET 'utf8';   

DROP TABLE IF EXISTS mon_cv ;/*creation table "mon cv"*/

CREATE TABLE mon_cv 
   ( cv_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , nom VARCHAR(50) NOT NULL/*Colonne nom*/
   , prenom VARCHAR(50) NOT NULL/*Colonne prénom*/
   , PRIMARY KEY (cv_id)
   )
   CHARACTER SET 'utf8';

DROP TABLE IF EXISTS mes_message ;/*creation table "mes message"*/

CREATE TABLE mes_message 
   ( message_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , nom_client VARCHAR(50) NOT NULL/*Colonne nom*/
   , email VARCHAR(100) NOT NULL/*Colonne email*/
   , sujet VARCHAR(100) NOT NULL/*Colonne sujet*/
   , le_message VARCHAR(200) NOT NULL/*Colonne message*/
   , PRIMARY KEY (message_id)
   )
   CHARACTER SET 'utf8';

DROP TABLE IF EXISTS projets_professionnelles ;/*creation table "projets professionnelles"*/

CREATE TABLE projets_professionnelles 
   ( projets_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , nom_projets VARCHAR(50) NOT NULL/*Colonne nom*/
   , photo VARCHAR(500) NOT NULL/*Colonne photo*/
   , technologies VARCHAR(500) NOT NULL/*Colonne technologies*/
   , depot_git VARCHAR(150) NULL/*Colonne depot_git*/
   , detail_projets VARCHAR(500) NOT NULL /*colonne detail*/
   , PRIMARY KEY (projets_id)
   )
   CHARACTER SET 'utf8';

DROP TABLE IF EXISTS projets_personelle ;/*creation table "projets personelle"*/

CREATE TABLE projets_personelle 
   ( projets_perso_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , nom_projets VARCHAR(50) NOT NULL/*Colonne nom*/
   , photo VARCHAR(500) NOT NULL/*Colonne photo*/
   , technologies VARCHAR(500) NOT NULL/*Colonne technologies*/
   , depot_git VARCHAR(150) NULL/*Colonne depot_git*/
   , detail_projets VARCHAR(500) NOT NULL /*colonne detail*/
   , PRIMARY KEY (projets_perso_id)
   )
   CHARACTER SET 'utf8';   

DROP TABLE IF EXISTS competences ;/*creation table "competences"*/

CREATE TABLE competences 
   ( competences_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , note VARCHAR(5) NOT NULL/*Colonne note*/
   , competences VARCHAR(500) NOT NULL/*Colonne competences*/
   , PRIMARY KEY (competences_id)
   )
   CHARACTER SET 'utf8';


DROP TABLE IF EXISTS rubriques_libres ;/*creation table "rubriques libres"*/

CREATE TABLE rubriques_libres 
   ( loisirs_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , loisirs VARCHAR(100) NOT NULL/*Colonne loisirs*/
   , PRIMARY KEY (loisirs_id)
   )
   CHARACTER SET 'utf8';


DROP TABLE IF EXISTS parcours_scolaire ;/*creation table "Parcours_scolaire"*/

CREATE TABLE parcours_scolaire 
   ( diplomes_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , ecole VARCHAR(100) NOT NULL/*Colonne ecole*/
   , diplome VARCHAR(100) NOT NULL/*Colonne diplome*/
   , date_obtention DATE NOT NULL/*Colonne date*/
   , PRIMARY KEY (diplomes_id)
   )
   CHARACTER SET 'utf8';

DROP TABLE IF EXISTS experiences_professionnelles ;/*creation table "experiences_professionnelles"*/

CREATE TABLE experiences_professionnelles 
   ( entreprise_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , entreprise VARCHAR(100) NOT NULL/*Colonne ecole*/
   , titre VARCHAR(100) NOT NULL/*Colonne titre*/
   , date_debut DATE NOT NULL/*Colonne date*/
   , date_fin DATE NOT NULL/*Colonne date*/
   , detail VARCHAR(500) NOT NULL /*colonne detail*/
   , PRIMARY KEY (entreprise_id)
   )
   CHARACTER SET 'utf8';


DROP TABLE IF EXISTS photo_profil ;/*creation table "photo_profil"*/

CREATE TABLE photo_profil 
   ( photos_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , photo_profil VARCHAR(100) NOT NULL/*Colonne photo*/
   , PRIMARY KEY (photos_id)
   )
   CHARACTER SET 'utf8';


DROP TABLE IF EXISTS coordonnes ;/*creation table "coordonnes"*/

CREATE TABLE coordonnes 
   ( coordonnes_id INTEGER NOT NULL AUTO_INCREMENT/*Colonne ID*/
   , telephone VARCHAR(100) NOT NULL/*Colonne telephone*/
   , mail VARCHAR(100) NOT NULL/*Colonne telephone*/
   , adresse VARCHAR(100) NOT NULL/*Colonne telephone*/
   , PRIMARY KEY (coordonnes_id)
   )
   CHARACTER SET 'utf8';
