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
  ,description varchar(200) NOT NULL

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
  ,authorization varchar(20) NOT NULL
   ,talents varchar(500) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
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
-- CREATE TABLE visitor(
   --id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
 -- ,idRole bigint(20) NOT NULL
  --,email varchar(50) NOT NULL
  --,firstName varchar(50) NOT NULL
 -- ,lastName varchar(50) NOT NULL
 -- ,phoneNumner bigint(100) NOT NULL
--)
--;

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
CREATE TABLE volunteer (
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,email varchar(50) NOT NULL
  ,firstName varchar(50) NOT NULL
  ,lastName varchar(50) NOT NULL
  ,phoneNumber bigint(100) NOT NULL

)
;

CREATE TABLE volunteerForm(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,content varchar(10000) NOT NULL
  ,idVolunteer bigint(20) NOT NULL
  ,date_time_column timestamp(6) NOT NULL
)
;


CREATE TABLE category(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
   ,name varchar(50) NOT NULL
   
); 

CREATE TABLE photoAgre(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,typeAgre  varchar(50) NOT NULL
  ,idCategory  bigint(20) NOT NULL
  ,idTypeAgre bigint(20) NOT NULL
  ,illustration longblob NOT NULL
  ,illustration_filename varchar(255) NOT NULL

)
;
-- CREATE TABLE typeAgrePhoto(
  --idAgre bigint(20) NOT NULL
  --,idPhoto bigint(50) NOT NULL

--)
-- ; 
CREATE TABLE convention(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,title varchar(50) NOT NULL
  ,adress varchar(200) NOT NULL
  ,description varchar(200) NOT NULL
  ,date bigint(100) NOT NULL
  ,poster longblob NOT NULL
  ,poster_filename varchar(255) NOT NULL


)
;

CREATE TABLE photoConvention(
   id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY
  ,title varchar(50) NOT NULL
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
  
;
ALTER TABLE memberTypeAgre
   ADD CONSTRAINT `fk_memberTypeAgre_member` FOREIGN KEY(idMember) REFERENCES member(id)
    ,ADD CONSTRAINT `fk_memberTypeAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
;

--ALTER TABLE visitor
  -- ADD CONSTRAINT `u_visitor_email` UNIQUE(email)
  -- ,ADD CONSTRAINT `fk_visitor_role` FOREIGN KEY(idRole) REFERENCES role(id)
--;
 
ALTER TABLE photoArtist
   ADD CONSTRAINT `fk_photoArtist_artist` FOREIGN KEY(idArtist) REFERENCES artist(id)
;
ALTER TABLE artistTypeAgre
   ADD CONSTRAINT `fk_artistTypeAgre_artist` FOREIGN KEY(idArtist) REFERENCES artist(id)
    ,ADD CONSTRAINT `fk_artistTypeAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
;
-- ALTER TABLE contactMessage
  -- ADD CONSTRAINT `fk_contactMessage_visitor` FOREIGN KEY(idVisitor) REFERENCES visitor(id)
--;
ALTER TABLE volunteerForm
   ADD CONSTRAINT `fk_formBenevole_volunteer` FOREIGN KEY(idVolunteer) REFERENCES volunteer(id)
;


-- ALTER TABLE typeAgrePhoto
   -- ADD CONSTRAINT `fk_typeAgrePhoto_typeAgre` FOREIGN KEY(idAgre) REFERENCES typeAgre(id)
    -- ,ADD CONSTRAINT `fk_typeAgrePhoto_photoAgre` FOREIGN KEY(idPhoto) REFERENCES photoAgre(id)
-- ;
 

 ALTER TABLE photoAgre
   ADD CONSTRAINT `fk_photoAgre_typeAgre` FOREIGN KEY(idTypeAgre) REFERENCES typeAgre(id)
    ,ADD CONSTRAINT `fk_photoAgre_category` FOREIGN KEY(idCategory) REFERENCES category(id)
;

ALTER TABLE conventionPhoto
   ADD CONSTRAINT `fk_conventionPhoto_convention` FOREIGN KEY(idConvention) REFERENCES convention(id)
    ,ADD CONSTRAINT `fk_conventionPhoto_photoConvention` FOREIGN KEY(idPhoto) REFERENCES photoConvention(id)
;


ALTER TABLE discussion
   ADD CONSTRAINT `fk_discussion_member` FOREIGN KEY(idMember) REFERENCES member(id)
;

ALTER TABLE comment
   ADD CONSTRAINT `fk_comment_member` FOREIGN KEY(idMember) REFERENCES member(id)
    ,ADD CONSTRAINT `fk_comment_discussion` FOREIGN KEY(idDiscussion) REFERENCES discussion(id)
;
