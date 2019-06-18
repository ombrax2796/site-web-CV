/*-----------------------MON CV---------------------------*/

INSERT INTO mon_cv VALUES /*Creation de la 1er CV*/
( 01 /*Son ID*/
   , 'Fourfooz' /*Son nom*/
   , 'Arthur'/*Son prenom*/
);


/*----------------------COMPETENCES----------------------*/

INSERT INTO competences VALUES /*Creation de la 1er competences*/
( 01 /*Son ID*/
   , '4' /*sa note*/
   , 'language de programmation (python, c, Html et Css, sql...)'/*Son nom*/
);


/*Autre competences*/
INSERT INTO competences VALUES 
( 02 
   , '5' 
   , 'Travaille en équipe'
);


INSERT INTO competences VALUES 
( 03 
   , '4' 
   , 'Gestions de projets'
);


INSERT INTO competences VALUES 
( 04
   , '3.5' 
   , 'Anglais'
);


INSERT INTO competences VALUES 
( 05
   , '3' 
   , 'Capacité d’adaptation'
);


INSERT INTO competences VALUES 
( 06
   , '4' 
   , 'Résolution de problèmes'
);
 

 /*----------------------rubriques libres----------------------*/

INSERT INTO rubriques_libres VALUES 
( 01
   , 'programmation' 
);

INSERT INTO rubriques_libres VALUES 
( 02
   , 'lecture' 
);


INSERT INTO rubriques_libres VALUES 
( 03
   , 'jeux de roles' 
);


INSERT INTO rubriques_libres VALUES 
( 04
   , 'jeux vidéo' 
);


INSERT INTO rubriques_libres VALUES 
( 05
   , 'sport (football,course,handball)' 
);


INSERT INTO rubriques_libres VALUES 
( 06
   , 'films/séries' 
);


/*----------------------coordonnes----------------------*/

INSERT INTO coordonnes VALUES 
( 01
   , '+XXXXXXXXXXXX' 
   , 'XXXXXXXXXX@homail.fr'
   , '347 Rue du roi, Paris, 33000'
);


/*----------------------photo profil----------------------*/

INSERT INTO photo_profil VALUES
(  01
   ,'image\photo_de_profil.jpg'
);


/*-------------------------Pour transferer base---------*/

INSERT INTO admin_cv  VALUES
(3, 'Arthur', 'azerty1234');


INSERT INTO parcours_scolaire VALUES
(1, 'Gustave Eiffel', 'Bac STI2D', '2016-07-15'),
(2, 'La garosse', 'brevet', '2012-07-15');


INSERT INTO photo_profil  VALUES
(1, './image/photo_de_profil.jpg');


INSERT INTO projets_personelle  VALUES
(1, 'voiture télécommander', './image/voiturearduino.jpg', 'arduino,capteur,C++,moteur', 'indisponible', 'créer ma propre télécommander');


INSERT INTO projets_professionnelles  VALUES
(2, 'Connected Flowers', './image/outilarduino.png', 'arduino,capteurs,Mariadb,Python', 'https://github.com/hboueix/ConnectedFlowers', 'Faire une application de plante connecté');


INSERT INTO visiteur  VALUES
(1, 2);