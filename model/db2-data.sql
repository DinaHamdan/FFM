USE `FFM-DHA`;

INSERT INTO role(id, code, label) VALUES
     (1, 'ADM','Admin')
    ,(2, 'MOD', 'Moderator')
    ,(3, 'MEM', 'Member')
    ,(4, 'VIS', 'Visitor')
   
;

INSERT INTO member( idRole, email, pass, passClear, firstName, lastName, phoneNumber, avatar, avatar_filename) VALUES
      ( 1, 'dina', '$2y$10$a72xSXL5bHr/E0AOeAt2P.Scq3TUkr.zUfsIfKPo3WEXSx1e8GAaG', 'test', 'Dina','Hamdan',  123, 'NA', 'NA')
;

INSERT INTO category(name)VALUES
('Fire')
,('LED')
,('DayProp')
;


INSERT INTO memberTypeAgre(idMember, idTypeAgre) VALUES
     (1, 1)
        ,(1, 4)
    
;
--TILL HERE
-- test for table of type of agre
INSERT INTO typeAgre( name, label, description) VALUES
     ('Poi', 'POI', 'Bolas' )
      ,( 'Staff', 'STF', 'NA' )
        ,( 'Dragon Staff', 'DS', 'NA' )
           ,( 'Rope Dart', 'RD', 'NA' )
          ,( 'Hula Hoop', 'HH', 'Cerceau' )
           ,( 'Juggling Balls', 'JB', 'Balles' )
           ,('Clubs', 'CL','Massue')
             ,('Diabolo', 'DIA','NA')
               ,('Mini Staff', 'MSTF','Bâtons de feu')
                 ,('Fire Hands', 'FH','Mains de feu')
                   ,('Nunchuks', 'NUN','Nunchuku')
                    ,('Fans', 'FA','Eventail')
                     ,('Monocycle', 'MO','NA')
                      ,('Whip', 'WH','Fouet')
                         ,('Torches', 'TOR','NA')
                         ,('Charcoal', 'CHAR','Charbon')
;



/* INSERT INTO photoAgreGallerieFeu ( nameAgre, idTypeAgre, idCategory, illustration, illustration_filename) VALUES
     ('Poi', 1, 1, 'NA' ,'NA'  )
      ,( 'Staff', 2 ,1, 'NA','NA' )
        ,( 'Dragon Staff', 3 ,1, 'NA','NA'  )
           ,( 'Rope Dart', 4 ,1, 'NA','NA'  )
          ,( 'Hula Hoop', 5 ,1, 'NA','NA'  )
           ,( 'Juggling Balls', 6 ,1, 'NA','NA'  )
           ,('Clubs', 7 ,1, 'NA','NA' )
             ,('Diabolo', 8 ,1, 'NA','NA' )
               ,('Mini Staff', 9 ,1, 'NA','NA' )
                 ,('Fire Hands', 10 ,1, 'NA','NA' )
                   ,('Nunchuks', 11 ,1, 'NA','NA' )
                    ,('Fans', 12 ,1, 'NA','NA' )
                     ,('Monocycle', 13 ,1, 'NA','NA' )
                      ,('Whip', 14 ,1, 'NA','NA' )
                         ,('Torches', 15 ,1, 'NA','NA' )
                         ,('Charcoal', 16 ,1, 'NA','NA' )

INSERT INTO photoAgreGallerieLED ( nameAgre, idTypeAgre, idCategory, illustration, illustration_filename) VALUES
     ('Poi', 1, 2, 'NA' ,'NA'  )
      ,( 'Staff', 2 , 2, 'NA','NA' )
        ,( 'Dragon Staff', 3 , 2, 'NA','NA'  )
           ,( 'Rope Dart', 4 , 2, 'NA','NA'  )
          ,( 'Hula Hoop', 5 , 2, 'NA','NA'  )
           ,( 'Juggling Balls', 6 ,2, 'NA','NA'  )
           ,('Clubs', 7 ,2, 'NA','NA' )
             ,('Diabolo', 8 ,2, 'NA','NA' )
               ,('Mini Staff', 9 ,2, 'NA','NA' )
                   ,('Nunchuks', 11 , 2, 'NA','NA' )
                    ,('Fans', 12 , 2, 'NA','NA' )
                     ,('Monocycle', 13 ,2, 'NA','NA' )
                      ,('Whip', 14 ,2, 'NA','NA' )
                */

                INSERT INTO typeAgreCategory (idAgre , idCategory) VALUES
                (1,1)
                ,(1,2)
                ,(1,3)
                ,(2,1)
                ,(2,2)
                ,(2,3)
                ,(3,1)
                ,(3,2)
                ,(3,3)
                ,(4,1)
                ,(5,1)
                ,(6,1)
                ,(6,2)
                ,(6,3)
                ,(7,1)
                ,(7,2)
                ,(7,3)
                ,(8,1)
                ,(8,2)
                ,(8,3)
                ,(9,1)
                ,(9,3)
                ,(10,1)
                ,(10,2)
                ,(10,3)
                ,(11,1)
                ,(12,1)
                ,(13,1)
