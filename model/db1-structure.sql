-- - Supprime la base de données si elle existe déjà
-- - Crée la base de données
-- - Mentionne le nom de la base de données à utiliser pour exécuter les commandes SQL qui suivent
DROP DATABASE IF EXISTS `FFM-DHA`;
CREATE DATABASE IF NOT EXISTS `FFM-DHA`;
USE `FFM-DHA`;

-- -------------
-- TABLES
-- -------------

CREATE TABLE role (
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,code varchar(50) NOT NULL
 ,label varchar(50) NOT NULL
)
;

CREATE TABLE adherant(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,idRole bigint(20) NOT NULL
  ,email varchar(50) NOT NULL
  ,pass varchar(100) NOT NULL
  ,passClear varchar(100) NOT NULL
  ,nom varchar(50) NOT NULL
  ,prenom varchar(50) NOT NULL
  ,telephone bigint(50) NOT NULL
  ,avatar longblob NOT NULL
  ,avatar_filename varchar(255) NOT NULL
)
;

CREATE TABLE photoArtiste(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,titre varchar(50) NOT NULL
  ,idAdherant bigint(20) NOT NULL
  ,label varchar(50) NOT NULL
  ,photographe varchar(2000) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;

CREATE TABLE utilisateur(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,idRole bigint(20) NOT NULL
  ,email varchar(50) NOT NULL
  ,nom varchar(50) NOT NULL
  ,prenom varchar(50) NOT NULL
  ,telephone bigint(100) NOT NULL
)
;

CREATE TABLE messageContact(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,type varchar(50) NOT NULL
  ,contenu varchar(2000) NOT NULL
  ,idUtilisateur bigint(20) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE formBenevole(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,contenu varchar(10000) NOT NULL
  ,idUtilisateur bigint(20) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE typeAgre(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,code bigint(20) NOT NULL
  ,label varchar(50) NOT NULL
  ,description varchar(200) NOT NULL

)
;

CREATE TABLE photoAgre(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,titre varchar(50) NOT NULL
  ,label varchar(50) NOT NULL
  ,photographe varchar(2000) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;
CREATE TABLE typeAgrePhoto(
  idAgre bigint(20) NOT NULL
  ,idPhoto bigint(50) NOT NULL

)
;
CREATE TABLE convention(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,titre varchar(50) NOT NULL
  ,adresse varchar(200) NOT NULL
  ,description varchar(200) NOT NULL
  ,date bigint(100) NOT NULL
  ,poster longblob NOT NULL
  ,poster_filename varchar(255) NOT NULL


)
;

CREATE TABLE photoConvention(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,titre varchar(50) NOT NULL
  ,label varchar(50) NOT NULL
  ,photographe varchar(2000) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;
CREATE TABLE conventionPhoto(
  idConvention bigint(20) NOT NULL
  ,idPhoto bigint(50) NOT NULL

)
;


CREATE TABLE discussion(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,titre varchar(50) NOT NULL
  ,contenu varchar(2000) NOT NULL
  ,idAdherant bigint(20) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE commentaire(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,contenu varchar(100) NOT NULL
  ,idAdherant bigint(20) NOT NULL
  ,idDiscussion bigint(20) NOT NULL
  ,date_time_column timestamp(6)  NOT NULL
)
;

-- -------------
-- CONTRAINTES
-- -------------

ALTER TABLE adherant
   ADD CONSTRAINT `u_adherant_email` UNIQUE(email)
   ,ADD CONSTRAINT `fk_adherant_role` FOREIGN KEY(idRole) REFERENCES role(id)
;

ALTER TABLE role
   ADD CONSTRAINT `u_role_code` UNIQUE(code)
  
;
ALTER TABLE utilisateur
   ADD CONSTRAINT `u_utilisateur_email` UNIQUE(email)
   ,ADD CONSTRAINT `fk_utilisateur_role` FOREIGN KEY(idRole) REFERENCES role(id)
;
ALTER TABLE messageContact
   ADD CONSTRAINT `fk_messageContact_utilisateur` FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
;
ALTER TABLE formBenevole
   ADD CONSTRAINT `fk_formBenevole_utilisateur` FOREIGN KEY(idUtilisateur) REFERENCES utilisateur(id)
;


ALTER TABLE discussion
   ADD CONSTRAINT `fk_discussion_adherant` FOREIGN KEY(idAdherant) REFERENCES adherant(id)
;

ALTER TABLE commentaire
   ADD CONSTRAINT `fk_commentaire_adherant` FOREIGN KEY(idAdherant) REFERENCES adherant(id)
    ,ADD CONSTRAINT `fk_commentaire_discussion` FOREIGN KEY(idDiscussion) REFERENCES discussion(id)
;

ALTER TABLE typeAgrePhoto
   ADD CONSTRAINT `fk_typeAgrePhoto_typeAgre` FOREIGN KEY(idAgre) REFERENCES typeAgre(id)
    ,ADD CONSTRAINT `fk_typeAgrePhoto_photoAgre` FOREIGN KEY(idPhoto) REFERENCES photoAgre(id)
;

ALTER TABLE conventionPhoto
   ADD CONSTRAINT `fk_conventionPhoto_convention` FOREIGN KEY(idConvention) REFERENCES convention(id)
    ,ADD CONSTRAINT `fk_conventionPhoto_photoConvention` FOREIGN KEY(idPhoto) REFERENCES photoConvention(id)
;