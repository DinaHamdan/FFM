
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/database.php';

/** 
 * @param string email email of user
 * @param string password hashed
 * @param string passClear password in clear
 * @param string idRole the id of the user's role
 * @param binary binaryFile the avatar of the user in binary
 * @param string nameFile the pathway to the avatar in the directory
 * @param string username the name of the user
 * @return boolean sucess or failure
 * @return array array of object
 * */
class LibAgre
{

    //List type of juggling props
    static function getTypeAgre(): array
    {
        $query = 'SELECT typeAgre.id, typeAgre.name, typeAgre.label, typeAgre.description';
        $query .= ' FROM typeAgre';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $typeAgre = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $typeAgre;
    }


    //List category of juggling ( fire or LED etc..)
    static function getCategory(): array
    {
        $query = 'SELECT category.id, category.name';
        $query .= ' FROM category';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $category = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $category;
    }

    //Add photos to agre table
    static function AddAgrePhoto($idCategory, $idTypeAgre, $binaryFile, $nameFile): bool
    {
        $query = 'INSERT INTO photoAgre( idCategory, idTypeAgre, illustration, illustration_filename) VALUES ( :idCategory, :idTypeAgre, :illustration, :illustration_filename)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idTypeAgre', $idTypeAgre);
        $statement->bindParam(':idCategory', $idCategory);
        $statement->bindParam(':illustration', $binaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':illustration_filename', $nameFile, PDO::PARAM_STR);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
