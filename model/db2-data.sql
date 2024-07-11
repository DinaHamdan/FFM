USE `FFM-DHA`;

INSERT INTO role(id, code, label) VALUES
     (1, 'ADM','Admin')
    ,(2, 'ADH', 'Adherant')
    ,(3, 'USE', 'Adherant')
   
;



INSERT INTO adherant(id, email, pass, passClear, description, idRole, avatar, avatar_filename) VALUES
      (1, 'dd', 'dd', 'dd', 'Hello I am your admin', 1, 'NA', 'NA')
     ,(2, 'ff', 'ff', 'ff', 'Hello I am a user', 2, 'NA', 'NA')
;

INSERT INTO discussion(id, textContent, idUtilisateur, illustration, illustration_filename, date_time_column) VALUES
     (1, 'blablablablablabla', 1, 'NA', 'NA','24-06-19 09:56:15')
    
;

INSERT INTO commentaire(id, phrase, idUtilisateur, idArticle, date_time_column) VALUES
     (1, 'blabla', 2, 1,'24-06-19 09:56:15' )
    
;
INSERT INTO putLike(id, idUtilisateur, idArticle, date_time_column) VALUES
     (1, 2, 1,'24-06-19 09:56:15' )
    
;
