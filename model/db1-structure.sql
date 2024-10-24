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
CREATE TABLE typeAgre(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,name varchar(20) NOT NULL
  ,label varchar(50) NOT NULL
  ,category varchar(50) NOT NULL

)
;

CREATE TABLE category(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
   ,name varchar(50) NOT NULL
   
   
); 

 CREATE TABLE typeAgreCategory(
  idAgre bigint(20) NOT NULL
  ,idCategory bigint(50) NOT NULL

);
CREATE TABLE photoAgre(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,idTypeAgre  bigint(50) NOT NULL
  ,idCategory  bigint(20) NOT NULL
  ,isMain varchar(10) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;


CREATE TABLE member(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,idRole bigint(20) NOT NULL
  ,email varchar(50) NOT NULL
  ,pass varchar(100) NOT NULL
  ,passClear varchar(100) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL
  ,avatar longblob NOT NULL
  ,avatar_filename varchar(255) NOT NULL
)
;
CREATE TABLE memberTypeAgre(
  idMember bigint(20) NOT NULL
  ,idTypeAgre bigint(50) NOT NULL

)
;
CREATE TABLE adhesion(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,email varchar(50) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL
  ,typeAgre varchar(2000) NOT NULL
  ,typeAdhesion varchar(2000) NOT NULL
  ,authorization varchar(20) NOT NULL
  ,talents varchar(500) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE contactMessage(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,type varchar(50) NOT NULL
  ,idRole bigint(20) NOT NULL
  ,email varchar(50) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL
  ,content varchar(2000) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE volunteerForm(
   idVolunteer bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,firstName varchar(20) NOT NULL
  ,lastName varchar(20) NOT NULL
  ,birthday date NOT NULL
  ,phoneNumber bigint(20) NOT NULL
  ,email varchar(20) NOT NULL
  ,dateArrival date NOT NULL
  ,dateDepart date NOT NULL
  ,dayOptions varchar(100) NOT NULL
  ,timeOptions varchar(100) NOT NULL
  ,workOptions varchar(500) NOT NULL 
  ,extraWorkInfo varchar(200) NOT NULL
  ,diplomePSC1 varchar(100) NOT NULL
  ,transport varchar(50) NOT NULL
  ,otherTransport varchar(50) NOT NULL
  ,lodging varchar(50) NOT NULL
  ,performance varchar(50) NOT NULL
  ,foodRestrictions varchar(200) NOT NULL
  ,otherInfo varchar(200) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE convention(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,firstDate varchar(50) NOT NULL
  ,firstDateContent varchar(2000) NOT NULL
  ,secondDate varchar(50) NOT NULL
  ,secondDateContent varchar(2000) NOT NULL
  ,thirdDate varchar(50) NOT NULL
  ,thirdDateContent varchar(2000) NOT NULL
  ,address varchar(200) NOT NULL
  ,description varchar(2000) NOT NULL
  ,cost varchar(200) NOT NULL
  ,poster longblob NOT NULL
  ,poster_filename varchar(255) NOT NULL
  ,programPhoto longblob NOT NULL
  ,programPhoto_filename varchar(255) NOT NULL

)
;


CREATE TABLE discussion(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,title varchar(50) NOT NULL
  ,content varchar(2000) NOT NULL
  ,idMember bigint(20) NOT NULL
  ,illustration longblob 
  ,illustration_filename varchar(255) 
  ,date_time_column timestamp(6) NOT NULL
)
;

CREATE TABLE comment(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,content varchar(100) NOT NULL
  ,idMember bigint(20) NOT NULL
  ,idDiscussion bigint(20) NOT NULL
  ,date_time_column timestamp(6)  NOT NULL
)
;

-- -------------
-- CONTRAINTES
-- -------------

ALTER TABLE member
   ADD CONSTRAINT `u_member_email` UNIQUE(email)
   ,ADD CONSTRAINT `fk_member_role` FOREIGN KEY(idRole) REFERENCES role(id)
;

ALTER TABLE role
   ADD CONSTRAINT `u_role_code` UNIQUE(code)
      ADD CONSTRAINT `u_role_label` UNIQUE(label)
;
ALTER TABLE category
   ADD CONSTRAINT `u_category_name` UNIQUE(name)
;
ALTER TABLE typeAgre
   ADD CONSTRAINT `u_typeAgre_name` UNIQUE(name)
   ;

   ALTER TABLE member
   ADD CONSTRAINT `u_member_email` UNIQUE(email)
;
/* maybe add phone number unique constraint */
 ALTER TABLE typeAgreCategory
    ADD CONSTRAINT `fk_typeAgreCategory_typeAgre` FOREIGN KEY(idAgre) REFERENCES typeAgre(id)
    ,ADD CONSTRAINT `fk_typeAgreCategory_category` FOREIGN KEY(idCategory) REFERENCES category(id)
 ;
 

 ALTER TABLE photoAgre
   ADD CONSTRAINT `fk_photoAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
    ,ADD CONSTRAINT `fk_photoAgre_category` FOREIGN KEY(idCategory) REFERENCES category(id)
;


ALTER TABLE discussion
   ADD CONSTRAINT `fk_discussion_member` FOREIGN KEY(idMember) REFERENCES member(id)
;

ALTER TABLE comment
   ADD CONSTRAINT `fk_comment_member` FOREIGN KEY(idMember) REFERENCES member(id)
    ,ADD CONSTRAINT `fk_comment_discussion` FOREIGN KEY(idDiscussion) REFERENCES discussion(id)
;




CREATE TABLE artist(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,email varchar(50) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL

)
;

CREATE TABLE photoArtist(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,title varchar(50) NOT NULL
  ,idArtist bigint(100) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;
CREATE TABLE artistTypeAgre(
  idArtist bigint(20) NOT NULL
  ,idTypeAgre bigint(50) NOT NULL

)
;
CREATE TABLE volunteer (
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,email varchar(50) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL

)
;

ALTER TABLE photoArtist
   ADD CONSTRAINT `fk_photoArtist_artist` FOREIGN KEY(idArtist) REFERENCES artist(id)
;
ALTER TABLE artistTypeAgre
   ADD CONSTRAINT `fk_artistTypeAgre_artist` FOREIGN KEY(idArtist) REFERENCES artist(id)
    ,ADD CONSTRAINT `fk_artistTypeAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
;
ALTER TABLE memberTypeAgre
   ADD CONSTRAINT `fk_memberTypeAgre_member` FOREIGN KEY(idMember) REFERENCES member(id)
    ,ADD CONSTRAINT `fk_memberTypeAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
;
ALTER TABLE volunteerForm
   ADD CONSTRAINT `fk_volunteerForm_volunteer` FOREIGN KEY(idVolunteer) REFERENCES volunteer(id)
;
