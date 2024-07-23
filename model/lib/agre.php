
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

    static function getIdTypeIdCategory(): array
    {
        $query = 'SELECT typeAgre.name, typeAgre.id, typeAgre.category';
        $query .= ' FROM typeAgre';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $listAgreTypeCategory = $statement->fetchAll(PDO::FETCH_ASSOC);
        /* 
        if (empty($listAgreTypeCategory['category'][2])) {
            ($listAgreTypeCategory['category'][2]) == 'NA';
        };
 */
        return $listAgreTypeCategory;

        /* 
        $listAgreTypeCategoryWithFormattedInfo = [];
        foreach ($listAgreTypeCategory as $agreTypeCategory) {
            $agreTypeCategory['cat'] = explode(',', $agreTypeCategory['category']);

            $listAgreTypeCategoryWithFormattedInfo[] = $agreTypeCategory;
        }
        return $listAgreTypeCategoryWithFormattedInfo; */
    }

    static function addAgreCategoryFeu($idAgre, $idCategoryFire): bool
    {
        $query = 'INSERT INTO typeAgreCategory( idAgre, idCategory) VALUES ( :idAgre, :idCategory)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idAgre', $idAgre);
        $statement->bindParam(':idCategory', $idCategoryFire);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    static function addAgreCategoryLED($idAgre, $idCategoryLED): bool
    {
        $query = 'INSERT INTO typeAgreCategory( idAgre, idCategory) VALUES ( :idAgre, :idCategory)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idAgre', $idAgre);
        $statement->bindParam(':idCategory', $idCategoryLED);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    static function addAgreCategoryDayProp($idAgre, $idCategoryDayProp): bool
    {
        $query = 'INSERT INTO typeAgreCategory( idAgre, idCategory) VALUES ( :idAgre, :idCategory)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idAgre', $idAgre);
        $statement->bindParam(':idCategory', $idCategoryDayProp);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
/*     //Get all photos from the fire gallerie
    static function getAgrePhotoFeu(): array
    {
        $query = 'SELECT photoAgreGallerieFeu.id, photoAgreGallerieFeu.nameAgre, photoAgreGallerieFeu.idTypeAgre, photoAgreGallerieFeu.idCategory, photoAgreGallerieFeu.illustration,  photoAgreGallerieFeu.illustration_filename ';
        $query .= ' FROM photoAgreGallerieFeu ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listPhotoAgreFeu = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoAgreFeu;
    }
    //Get all photos from the fire gallerie
    static function getAgrePhotoLED(): array
    {
        $query = 'SELECT photoAgreGallerieLED.id, photoAgreGallerieLED.nameAgre, photoAgreGallerieLED.idTypeAgre, photoAgreGallerieLED.idCategory, photoAgreGallerieLED.illustration,  photoAgreGallerieLED.illustration_filename ';
        $query .= ' FROM photoAgreGallerieLED ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listPhotoAgreLED = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoAgreLED;
    } */
    /*  //Add photos to agre table
    static function AddAgrePhotoFeu($idCategory, $idTypeAgre, $binaryFile, $nameFile): bool
    {
        $query = 'INSERT INTO photoAgreGallerieFeu( idCategory, idTypeAgre, illustration, illustration_filename) VALUES ( :idCategory, :idTypeAgre, :illustration, :illustration_filename)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idTypeAgre', $idTypeAgre);
        $statement->bindParam(':idCategory', $idCategory);
        $statement->bindParam(':illustration', $binaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':illustration_filename', $nameFile, PDO::PARAM_STR);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    //Add photos to agre table
    static function AddAgrePhotoLED($idCategory, $idTypeAgre, $binaryFile, $nameFile): bool
    {
        $query = 'INSERT INTO photoAgreGallerieLED( idCategory, idTypeAgre, illustration, illustration_filename) VALUES ( :idCategory, :idTypeAgre, :illustration, :illustration_filename)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':idTypeAgre', $idTypeAgre);
        $statement->bindParam(':idCategory', $idCategory);
        $statement->bindParam(':illustration', $binaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':illustration_filename', $nameFile, PDO::PARAM_STR);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    } */
    //Get all photos joining category and type 


    /*  //Get all photos
    static function getAllAgrePhoto(): array
    {
        $query = 'SELECT photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory, photoAgre.illustration';
        $query .= ' FROM photoAgre ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listPhotoAgre = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoAgre;
    }
    //Get all photos joining category and type 
    static function getAgrePhotoCategoryType(): array
    {
        $query = 'SELECT photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory, photoAgre.illustration, category.id, category.name AS category, typeAgre.id, typeAgre.name AS type';
        $query .= ' FROM photoAgre ';
        $query .= ' JOIN category ON photoAgre.idCategory = category.id ';
        $query .= ' JOIN typeAgre ON photoAgre.idTypeAgre = typeAgre.id ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listPhotoCatAgre = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoCatAgre;
    }

    //Get photo by category
    static function getAgrePhotoCategory($idCategory): array
    {
        $query = 'SELECT photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory, photoAgre.illustration,photoAgre.illustration_filename, category.id, category.name AS catName, typeAgre.id, typeAgre.name As agreName';
        $query .= ' FROM photoAgre ';
        $query .= ' JOIN category ON photoAgre.idCategory = category.id ';
        $query .= ' JOIN typeAgre ON photoAgre.idTypeAgre = typeAgre.id ';
        $query .= ' WHERE photoAgre.idCategory = :idCategory AND photoAgre.idTypeAgre = :idTypeAgre';

        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':idCategory', $idCategory);
        $statement->bindParam(':idTypeAgre', $idTypeAgre);

        $successOrFailure = $statement->execute();
        $listPhotoCat = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoCat;
    }

    //Get photo by type of agre 
    static function getAgrePhotoType($type): array
    {
        $query = 'SELECT photoAgre.id, photoAgre.idTypeAgre, photoAgre.idCategory, photoAgre.illustration, category.id, category.name AS category, typeAgre.id, typeAgre.name AS type';
        $query .= ' FROM photoAgre ';
        $query .= ' JOIN category ON photoAgre.idCategory = category.id ';
        $query .= ' JOIN typeAgre ON photoAgre.idTypeAgre = typeAgre.id ';
        $query .= ' WHERE type = :$type';

        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listPhotoType = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listPhotoType;
    } */
