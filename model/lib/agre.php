
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
        $query = 'SELECT typeAgre.id, typeAgre.name, typeAgre.label';
        $query .= ' FROM typeAgre';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $typeAgre = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $typeAgre;
    }


    //List type of juggling props
    static function getAgrebyId($idAgre): array
    {
        $query = 'SELECT typeAgre.id, typeAgre.name, typeAgre.label';
        $query .= ' FROM typeAgre';
        $query .= ' WHERE typeAgre.id = :idAgre';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idAgre', $idAgre);
        $successOrFailure = $statement->execute();
        $agreById = $statement->fetch(PDO::FETCH_ASSOC);
        return $agreById;
    }
    //List type of juggling props
    static function getAdminTypeAgre($idCategory): array
    {
        $query = 'SELECT typeAgre.id, typeAgre.name, typeAgre.label';
        $query .= ' FROM typeAgre';
        $query .= ' JOIN typeAgreCategory ON typeAgre.id = typeAgreCategory.idAgre ';
        $query .= ' JOIN category ON category.id = typeAgreCategory.idCategory ';
        $query .= ' AND category.id = :idCategory ';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idCategory', $idCategory);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $adminTypeAgre = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $adminTypeAgre;
    }
    /*     static function getGallerieTypeAgre($idCategory): array
    {
        $query = 'SELECT typeAgre.id AS idAgre, typeAgre.name AS agreName, typeAgre.label, category.id, category.name AS categoryName, typeAgreCategory.idAgre, typeAgreCategory.idCategory ';
        $query .= ' FROM typeAgre';
        $query .= ' JOIN typeAgreCategory ON typeAgre.id = typeAgreCategory.idAgre ';
        $query .= ' JOIN category ON category.id = typeAgreCategory.idCategory ';
        $query .= ' AND category.id = :idCategory ';

        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idCategory', $idCategory);


        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $typeAgre = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $typeAgre;
    } */

    // THIS ONE
    //List type of juggling props
    static function getGallerieTypeAgre($idCategory, $isMain): array
    {
        $query = 'SELECT typeAgre.id, typeAgre.name AS agreName, typeAgre.label, category.id, category.name AS categoryName, typeAgreCategory.idAgre, typeAgreCategory.idCategory, photoAgre.illustration ';
        $query .= ' FROM typeAgre';
        $query .= ' JOIN typeAgreCategory ON typeAgre.id = typeAgreCategory.idAgre ';
        $query .= ' JOIN category ON category.id = typeAgreCategory.idCategory ';
        $query .= ' AND category.id = :idCategory ';
        $query .= ' JOIN photoAgre ON photoAgre.idTypeAgre = typeAgre.id ';
        $query .= ' AND photoAgre.idCategory = :idCategory ';
        $query .= ' WHERE photoAgre.isMain = :isMain';

        $statement = libDb::connect()->prepare($query);


        $statement->bindParam(':idCategory', $idCategory);
        $statement->bindParam(':isMain', $isMain);

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

    //Add photos to prop db 
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


    static function AddAgreType($nameTypeagre, $labelTypeagre, $categoryTypeAgre): bool
    {
        $query = 'INSERT INTO typeAgre( name, label, category) VALUES (  :name, :label, :category)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':name', $nameTypeagre);
        $statement->bindParam(':label', $labelTypeagre);
        $statement->bindParam(':category', $categoryTypeAgre);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function addAgreCategory($idAgre, $idCategory): bool
    {
        $query = 'INSERT INTO typeAgreCategory( idAgre, idCategory) VALUES ( :idAgre, :idCategory)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idAgre', $idAgre);
        $statement->bindParam(':idCategory', $idCategory);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function getIdType($nameTypeagre): array
    {
        $query = 'SELECT typeAgre.name, typeAgre.id';
        $query .= ' FROM typeAgre';
        $query .= ' WHERE typeAgre.name = :name';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':name', $nameTypeagre);
        $successOrFailure = $statement->execute();
        $idAgreType = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $idAgreType;
    }
    static function getIdTypeIdCategory(): array
    {
        $query = 'SELECT typeAgre.name, typeAgre.id, typeAgre.category';
        $query .= ' FROM typeAgre';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $listAgreTypeCategory = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listAgreTypeCategory;

        /* 
        $listAgreTypeCategoryWithFormattedInfo = [];
        foreach ($listAgreTypeCategory as $agreTypeCategory) {
            $agreTypeCategory['cat'] = explode(',', $agreTypeCategory['category']);

            $listAgreTypeCategoryWithFormattedInfo[] = $agreTypeCategory;
        }
        return $listAgreTypeCategoryWithFormattedInfo; */
    }

    //Get photo of prop
    static function getAgrePhoto($idTypeAgre, $idCategory): array
    {
        $query = ' SELECT typeAgre.name AS agreName, photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory, photoAgre.isMain, photoAgre.illustration, photoAgre.illustration_filename';
        $query .= ' FROM photoAgre';
        $query .= ' JOIN typeAgre ON typeAgre.id = :idTypeAgre';
        $query .= ' WHERE photoAgre.idTypeAgre = :idTypeAgre AND photoAgre.idCategory = :idCategory';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idTypeAgre', $idTypeAgre);
        $statement->bindParam(':idCategory', $idCategory);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $listPhotoAgre = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoAgre;
    }
    static function getAgreName($idAgre): array
    {
        $query = ' SELECT typeAgre.name';
        $query .= ' FROM typeAgre ';
        $query .= ' WHERE typeAgre.id= :idAgre';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idAgre', $idAgre);
        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $agreName = $statement->fetch(PDO::FETCH_ASSOC);
        return $agreName;
    }
    static function chooseMainPhoto($idPhotoAgre, $isMain): bool

    {
        $query = ' UPDATE photoAgre SET isMain = :isMain ';
        $query .= ' WHERE photoAgre.id = :idPhotoAgre ';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idPhotoAgre', $idPhotoAgre);
        $statement->bindParam(':isMain', $isMain);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function deleteAgrePhoto(string $idPhotoAgre): bool
    {
        $query = 'DELETE FROM photoAgre WHERE photoAgre.id= :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idPhotoAgre);
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function deleteAgrePhotoById(string $idAgre): bool
    {
        $query = 'DELETE FROM photoAgre WHERE photoAgre.idTypeAgre= :idAgre';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idAgre', $idAgre);
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function deleteAgreCategory(string $idAgre): bool
    {
        $query = 'DELETE FROM typeAgreCategory WHERE typeAgreCategory.idAgre= :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idAgre);
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    static function deleteAgre(string $idAgre): bool
    {
        $query = 'DELETE FROM typeAgre WHERE typeAgre.id= :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idAgre);
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function removeMainPhoto($idMainPhotoAgre, $isNotMain): bool

    {
        $query = ' UPDATE photoAgre SET isMain = :isNotMain ';
        $query .= ' WHERE photoAgre.id = :idMainPhotoAgre ';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idMainPhotoAgre', $idMainPhotoAgre);
        $statement->bindParam(':isNotMain', $isNotMain);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    static function checkMainPhoto($idPhotoTypeAgre, $idPhotoCategory, $isMain): ?array

    {
        $query = ' SELECT photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory';
        $query .= ' FROM photoAgre';
        $query .= ' WHERE photoAgre.isMain = :isMain AND photoAgre.idTypeAgre = :idPhotoTypeAgre AND photoAgre.idCategory = :idPhotoCategory ';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idPhotoTypeAgre', $idPhotoTypeAgre);
        $statement->bindParam(':idPhotoCategory', $idPhotoCategory);
        $statement->bindParam(':isMain', $isMain);
        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $listMainPhoto = $statement->fetch(PDO::FETCH_ASSOC);

        if ($listMainPhoto == false) {
            $listMainPhoto = null;
        };
        return $listMainPhoto;
    }
}
