# Cahiers des charges Fire From Mars 02-07-24

Présentation de l’association : 
Fire From mars, une association à but non-lucratif, de jongleurs pour les arts de cirque et la jonglerie enflammée.

### Secteur d’activité :
Promouvoir les arts de la jonglerie auprès d’un grand public, production de spectacles et le partage de l’enseignement de la pratique de jongle entre jongleurs (débutant, amateur et pro).

### Produits :
Prestation de jonglage pour des clients.
Fire jam, chaque semaine les jongleurs se réunissent (souvent les mardis) à la cathédrale la major pour jongler, s’entraider, s’entraîner a faire du feu, initier des débutants aux arts de la jonglerie.
Organisation et réalisation d’un convention de jonglage, Jongle En Zik.

### Cibles : 
Jongleurs, membres actifs, clients de prestations, bénévoles et clients des conventions.
Personas: Voir fichier de personas.


Expression de besoin :
Refont de leur site web, améliorer la navigation du site, ajouter des fonctionnalités.
Faciliter la communication pour les clients de l’association. Faciliter l’organisation des prestations, des conventions, du recrutement des bénévoles pour les conventions, et l’adhésion des membres actifs pour l’association.
Faciliter la communication entre les membres actifs.
Faciliter la gestion des galléries de photos, d’événements.

### Pages: 
Menu bar  Onglet Acceuil – Onglet Agrès - Onglet Evénements -   Onglet Contact – Onglet Login – Onglet Forum caché avant Login – Onglet BackOffice Admin caché avant Login

Page d’acceuil  présenter le groupe, Présenter les activités proposé et événements passés.
Page Login/Enregistrement
Page agrès + artistes(bonus) – Gallérie des photos 
Page présentation de l’association ( pourquoi devenir adhérant? ) + formulaire d’adhésion
Page d’événement  de Jongle En Zik – acheter billet – devenir bénévole
Page d’événements passés + filtres (Bonus)
Page contact – formulaire de contact/demander un devis + FAQ (Bonus)
Footer
Page Forum discussion (pour adhérant)
BackOffice : Page Admin * CRUD 

### Fonctionnalités :

### Priorités
Gallérie de photos: visualiser les événements, les agrès. Etc..
Visualiser Jongle En Zik (convention de jonglage): devenir bénévole, acheter les billets, voir la carte.
Formulaire de contact pour les gens qui ont des questions, et pour clients qui demandent un devis.
Formulaire d’inscription de membres actifs.
Formulaire d’inscription de bénévoles pour les conventions.
Formulaire de Login.
Forum de discussion pour les adhérants.

Back office CRUD :
Ajouter des photos 
Enlever des photos 
Modifier/Ajouter/Modifier la description d’un événement
Enlever des Messages du forum

Base de données messages de contact.
Base de données membres actifs.
Base de données bénévoles.
Base de données agrès.
Base de données événements.
Garder HelloAsso pour le paiement.

Admin peut ajouter les membres, interface ajout de membre, ajout de mail et de mot de passe qui peut être modifié plus tard.

Bonus :
FAQ
Base de données artistes
Dark/Light theme
Calendrier
Base de données événements (filtrer par thème ou agrès)


Temps de réalisation :
2 mois, début 2-07-24- fin 20-09-24 (50 jours pour réaliser).
 # Planning 
 ## Semaine 1 
### Mardi 02-07-24
* Étude de l'expression de besoin (un résumé du projet au format texte)
* Établissement du cahier des charges (fonctionnalités, rôles)
* Mise en place d'un planning (anticiper toujours sur 80% du temps prévu)
* Maquettage - Charte graphique (formulaire à changer).
* Maquettage - arborescence de site 

 

* Maquettage - Maquettage statique
* Maquettage - Zoning / wireframe 
* Maquettage - Maquettage dynamique 
* Conception BDD - Dictionnaire de données, MCD,MLD, MPD 
* BD structure SQL – BD data SQL
* Réalisation (code versionné avec git).
* Livraison et déploiement (mode d'emploi).

### Budget :
Non-existant

### Contraintes :
Temps
Maintenance


 

### Lundi 08-07-24

Conception BDD - Dictionnaire de données, MCD,MLD, MPD
BDD Agrès
BDD Membres actifs
BDD Messages de contact
BDD Convention 
BDD Forum
BDD  bénévoles (la plus compliqués)
Bonus: BDD Artistes- BDD évenements passés

    • Dictionnaire de données FFM :
Entités: Role – Membre –  Client – Bénévole - Photo – Discussion – Commentaire – Message
Attribus : Nom – Prénom – Email – Password – Avatar - 
Relations: Possède – Publier – Ecrire – Lire - 

    • BDD Agrès : 
Entité: Photo – type d’agré
Attribus : Description – Date – Photographe etc..
Relation: Possède

Une photo peut posséder un ou plusieurs type d’agré
Un type d’agré possède  peut posséder un ou plusieurs photo

Une photo peut posséde au minimum 1 type d’agré et au max 1 type d’agré.
Un type d’agré possède au minimum 0 photo au max N photo

    • Bonus BDD Artiste:
Entité: Photo – Type d’agré – Artiste 
Attribus : Nom – Prénom – Email – Telephone - Date – Photogaphe -
Relation: Possède

Un type d’agré peut posséder un ou plusieurs Artistes  
Un type d’agré possède au minimum 0 Artistes au maximum N Artistes

Un artiste peut possèder un ou plusieurs type d’agré, un nom, un prenom, un email, un numero de telephone
Un artiste possède au minimum 1 Type d’agrè au Max N Type d’agrè

    • BDD Membres actifs:
Entité: Photo – Type d’agré – Membre -  Role
Attribus : Nom – Prénom – Email – Telephone – Avatar - Date – Photographe -
Relation: Possède
 
Un membre possède un role.
Un Role est possèdé par au mininmum 0 au max N utilisteur
Un Membre possède  au mininmum 1 Role au maximum 1 Role.

Un type d’agré peut posséder un ou plusieurs Membres 
Un type d’agré possède au minimum 0 Membres au maximum N Membres

Un Membre peut possèder un ou plusieurs type d’agré, un nom, un prenom, un email, un numero de telephone
Un Membre possède au minimum 0 Type d’agrè au Max N Type d’agrè

    • BDD Messages de contact:
Entité: Message - Utilisateur–
Attribus : Nom – Prénom – Email – Telephone - Date – Contenu text
Relation: Ecrire – Possède 
Un utilisateur peut écrire un ou plusieurs Message de contact.
Un utilisatier peut écrire au min 0 au max N messages.
Un message de contact peut posséder un utilisateur, une date, un contenu
Un message possède au min 1 utilisateur au maximum 1 utilisateur
       
    • BDD Convention:
Entité: Evenement- Photos
Attribus : Titre – date - adresse – description – poster - 
Relation:  Possède 

Un Evenement de convention peut posséder un titre, une description , une date , une adresse, un poster, des photos 
Un événement(convention) posséde au mininum 1 photo au max N photos

    • BDD Forum:
Entité: Discussion – Auteur – Lecteur
Attribus: titre – contenu – date - 
Relation: Publier – Lire – Répondre – Possède

Un Utilisateur peut publier une discussion, qui a un titre et un contenu et un date et une heure, Un utilisateur peut lire une discussion, peut répondre à une discussion. *

Un utilisateur peut publieur au minimum 0 discussion et au maximum N discussion
Une discussion est publié au minmum par 1 utilisateur et au maximum par 1 utilisateur.

Une discussion possède au min 1 auteur et au max 1 auteur.
Une disccusion possède au min 0 au max  N réponse.

    • BDD  bénévoles (la plus compliqués):

Entité: Utilisateur – formulaire - 
Attribus : Nom – Prénom – Email – Telephone – contenu -réponses
Relation:   Remplit

Un utilisateur remplit au min 0 au maximum N formulaire de bénévolat
Un formulaire est remplit pas au minimum 1 et au maximum 1 utilisateur

    • BDD événments passés:
Entité: Evenement- Photos
Attribus : Titre – date - adresse – description – poster - 
Relation:  Possède 

Un Evenement de convention peut posséder un titre, une description , une date , une adresse, un poster, des photos 
Un événement(convention) posséde au mininum 0 photo au max N photos


## base de données, rappels sur le vocabulaire

1. **Dictionnaire de données** : brainstorming sur l' existant, extraire un max d'info (noms communs et des verbes)

2. **MCD** (Modèle Conceptuel de Données) : Entité, Attribut, Relation, et Cardinalités (min-max) de la Relation. objectif : communiquer avec des non-informaticiens

3. **MLD** (Modèle logiques de données) objectif : traduire les Entités et leurs Relations à l'aide uniquement de Tables, de Colonnes, de Clés Primaires (PK) et de clés Etrangères (FK)
la traduction est 'mécanique',  à l'aide des **'2  phrases à retenir'** selon le type de relation :
 -> relation de type **1-N** : la **clé primaire** de la Table 'du côté de N' est référencée par une **clé étrangère** dans la Table 'du côté de 1'.
 -> relation de type **N-N** : une nouvelle Table doit être créée (ça s'appelle une **Table d'Association**) qui référence les clés primaires des 2 Tables de part et d'autre de la Relation par des clés étrangères.

4. **MPD** (Modèle Physique de Données) : utiliser SQL pour créer les Tables avec leurs Colonnes, et les Clés Etrangères qui pointent vers les clés Primaires. Choisir aussi le type des Colonnes.


### 10-07-24

NB: BDD agre + photos agrès : admin needs a list déroulante to able to pick the kind of agre while uploading the photos
Upload photos
Type d’agré liste : staff-hoop-poi-nunchucks-etc etc

Finished db-structure

### 11-07-24
started db-data
changed db-structure and MCD MLD

### 12-07-24
add attributes to membertypeagre table
typeAgrephoto – conventionPhoto
ajouter interface pour ajouter des type d’agré
détailler  fonctionnalité pour le planning diagramm gantt


### Vendredi
Login + inscription
Interface inscription
Logout
redirection towards forum

## Semaine 2
### Lundi 15
presentation
Créer discussion et commentaire interface forum
DONE Need to add avatar de l’utilisateur et le temps pour les commentaires



### Mardi
DONE formulaire modifier Profil- avatar + number
 DONE + avatar de l’utilisateur pour les commentaires

### Mercredi
 DONE contact
DONE Formulaire adhésion
Formulaire benevole Not done

### Jeudi
Formulaire bénévole
Visualiser gallerie photos agrès PAS FINI

### Vendredi 
Visualiser gallerie photos convention PAS FAIT

## Semaine 3 
### Lundi 22 
A faire : 
Visualiser gallerie photos agrès 
Formulaire bénévole

Ce qui était prévu:
interface modifier les gallerie ajouter les photos

notes discussion:
association NN entre categorie et type agre au min 1 au max N categorie

column on table imageAgre is main = true or false
Select for each categry list type agre JOIN photo where is main = true

Ce que j’ai fait : repris la structure de la bdd le MCD et le MLD
### Mardi 23
WHAT IS DONE : Add agre, show agre table, make connection with category
 DONE ajouter les photos + choisir la photo d’Interface des galleries (need to remove is main when another one is checked).


### Mercredi 24
Finaliser tout ca – LIMITE de temps sur fonctionnalités

 DONE Interface gallerie modifier la fonction select photos
Remove photo
Remove isMain when another photo is checked




### Jeudi 25

DONE Need to fix user and coderole undefined array
 DONE update database
DONE CRUD convention  update function SET bla bla


### Vendredi 26
DONE SELECT AND convention into html
DONE Forum Delete discussions and comments
DONE Poster discussion sans photo



## Semaine 4 
### Lundi 29
Maquette 
commencer HTML CSS 
Coding reste de fonctionnalité
To do :
DONE Redo all pages – split them to different sass style pages
DONE Finish page d’acceuil CSS
Started Code function read volunteer form INSERT INTO bdd


### Mardi 30
DONE function read volunteer form INSERT INTO bdd
Adjust minor details for page d'acceuil - do desktop



### 


### Notes 02-08-24 présentation semaine 4 
***

fire jam: expliquer c'est quoi - mettre synonyme DONE
 Faire une presentaton complète avec titres même si c'est vide dedans pour avoir la structure finale avec le REAC completement checké
 travail d'équipe TRELLO GITHUB DRIVE

A faire: 
 MCD 
table volontaire a changer
MCD MLD sur un slide
agré passer moin temps dessus
Maquette référentiel - checklist avec tous mettre tout dans la présentation
 Priorités : diagramm de gantt - un planning pour montrer j'ai fait quoi quand

*** 
**Semaine 5 Vacances**
*** 

## Semaine 6  mi-vacances 
### Mardi 13-08-24 
Présentation

### Mercredi 14-08-24 
CSS formulaire de contact 
ajuster CSS page d'acceuil 

### Jeudi 15-08-24 
CSS Jongle en Zik
CSS formulaire adhesion 
CSS formulaire Login 


### Vendredi 16-08-24
**CSS forum** 


### Le weekend ? 
**CSS gallerie agrés**
Choisir une photo de background pour la gallerie, regarder des exempls pour inspiration
***Pour Lundi finir le gros du CSS et bien préparer la présenation*** 
 
 ***

## Semaine 7 après les vacances
Lundi 
présentation   
Impératif commencer rapport  

Mardi
**CSS formulaire bénévole**
Finir CSS le gros  

Mercredi
CSS agrès gallerie
fix buttons for section about us


Jeudi 
CSS backoffice

## Semaine 8
Lundi
Fix user coderole =[] for event page Jongle en Zik 
changer le nom des fichiers ctrl , enlever display des non formulaires
css gallerie agrès

Mardi
finir CSS gallerie agrès
  

Mercredi
finir CSS gallerie agrès
ajuster la fonction qui change et les dimensions des images
CSS backOffice pour l'éxistant (inscription - ajout des photos et des types d'agrés)


Jeudi 
Coder backend BackOffice : 
Formulaire contact - Formulaire adhesion - Formulaire bénévole 

Vendredi 
Show members
Remove Members
Add a condtion to check if profile is complete : 
add a function at Login to check if profile fname last name and avatar are empty or not  
added link page to change password Not complete 

weekend
I did not
CSS backoffice
rapport + 
déploiement



## semaine 9 

## Lundi 02-09
Fix gallerie links towards photo for one agré
fonctionnalité pour changer mot de pass BUG
Debugging (additional functions)  

## Mardi 03-09
fonctionnalité pour changer mot de pass BUG - fixed

## Mercredi 04-09 
Commencer CSS BackOffice
Déploiment

## Jeudi 05-09
css backoffice 
sticky menu
navbar css
présentation

## Vendredi 06/09
présentation
notes: 
Requête SQL avec Join IMPORTANT!!!
Présenter plus de sécurité 
margin important navigation
Difference entre jpeg et png 
Juridiquement cocher une case ?  c'est assez ou pas
Pattern password et email ne pas oublier


## weekend 
Rapport



# Semaine 10
sécurité  
rapport   
## Lundi 09-09
Rapport

## Mardi 10-09
getAvatar icon on top left side
router
cssback office

## Mercredi 11-09
CSS Back office
report

## jedui 12-09

## Vendredi 13-09
Report
référencement
Resize photos

# Semaine 11

## Lundi 16-09
Rapport 

## Mardi 17-09 
Rapport



# Notes présentation 
Slides A faire: 
 MCD 
table volontaire a changer
MCD MLD sur un slide
agré passer moin temps dessus
Maquette référentiel - checklist avec tous mettre tout dans la présentation
 Priorités : diagramm de gantt - un planning pour montrer j'ai fait quoi quand

## Vendredi 06/09
présentation
notes: 
Requête SQL avec Join IMPORTANT!!!
Présenter plus de sécurité 
margin important navigation
Difference entre jpeg et png 
Juridiquement cocher une case ?  c'est assez ou pas
Pattern password et email ne pas oublier

## Lundi 19/08/24 Notes de la présentation 
travailler en autonomie en collaboration avec mon tuteur de stages- driver sur les points importants  
pas de je ne sais pas  
diagramm de gantt en double le mettre en une fois   
enlever le diagramm des fonctionalités priorités   
expliquer fire jam au bon endroit   
MCD à non informaticiens, enlever?  
Bien expliquer les fonctions, prendre un exemple avec un JOIN et pourvoir l'expliquer, c'est quoi  static, c'est quoi
Maquette statique montrer et prendre plus de temps pour faire la demo du site 
Mettre plus d'exemple de code: développer le 


## End of stage 

## CODE TO DO :
remove useless tables in bdd phpmyadmin
add constraints for unique codes
Resize photos-upload to website - share link
add javascript or animation for gallery
add javascript for hamburger menu
CSS BackOffice details 
Adjuste about us section buttons for screens bigger than 2000px
Add php function to get agrè titles 
add adhésion type of adhesion (membre actif or adhésion normal)
Change comment size
change order of contact us maybe? 
//TODO Need to add algorithm to check for photo width and height and change it accordingly , imagick

# Retour au GRETA 


## documents à faire
Résumé Projet
Dossier Projet -> 14 Octobre version éléctrique obligatoire
Diaporama
Dossier Professionnel 


## Lundi 23-09-24
error undefined array key
router redirection
Résumé projet 

### Mardi 24-09-24
rapport - MVC + exemple de code

### Mercredi 25-09-24
Rapport
reprendre structure
dictionnaire de données


### Jeudi 26-09-24
Rapport
Changer MCD Done

POO

### Vendredi 27-09-24
POO
exemple de code ajout des types d'agrès 


### Lundi 30-09-24
exemple de code upload de photo 
Réalisation front end html css

### Mardi 01-10-24
sass
html

### Mercredi 02-10-24
finish partie css

### jeudi 03-10-24
déploiement sécurité

## Semaine prochaine
modification code - reprendre le rapport 


### Lundi 07-10-24
Sécurite 
algorithm pour insciription si le compte existe deja 


### Mardi 08-10-24
Sécurité rapport
Projection rapport 
Javascript rapport 

### Mercredi 09-10-24
RGPD
Relire rapport 

### Jeudi 10-10-24
Code
Relire rapport   

### Vendredi 11-10-24
Dossier professionel
présentation 

 
# Rapport todo
Javascript
  sécurité (login + inscription )
 projection : référencement google résultats - axes d'amélioration 
RGPD