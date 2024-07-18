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

INSERT INTO memberTypeAgre(idMember, idTypeAgre) VALUES
     (1, 1)
        ,(1, 4)
    
;

INSERT INTO category(name)VALUES
('Fire')
,('LED')
,('DayProp')
;