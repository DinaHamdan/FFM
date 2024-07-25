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
class LibEvent
{
    //Create a post
    static function updateEvent($conventionFirstDay, $conventionSecondDay, $conventionThirdDay, $contentFirstDay, $contentSecondDay, $contentThirdDay, $address, $cost, $description, $posterBinaryFile, $posterNameFile, $programBinaryFile, $programNameFile): bool
    {
        $query = 'UPDATE convention SET firstDate = :conventionFirstDay, secondDate = :conventionSecondDay, thirdDate = :conventionThirdDay, firstDateContent = :contentFirstDay, secondDateContent = :contentSecondDay, thirdDateContent = :contentThirdDay, description = :description, address = :address, cost = :cost, poster = :poster, poster_filename = :poster_filename, programPhoto = :programPhoto, programPhoto_filename = :programPhoto_filename';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':conventionFirstDay', $conventionFirstDay);
        $statement->bindParam(':conventionSecondDay', $conventionSecondDay);
        $statement->bindParam(':conventionThirdDay', $conventionThirdDay);
        $statement->bindParam(':contentFirstDay', $contentFirstDay);
        $statement->bindParam(':contentSecondDay', $contentSecondDay);
        $statement->bindParam(':contentThirdDay', $contentThirdDay);

        $statement->bindParam(':description', $description);

        $statement->bindParam(':address', $address);
        $statement->bindParam(':cost', $cost);


        $statement->bindParam(':poster', $posterBinaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':poster_filename', $posterNameFile, PDO::PARAM_STR);

        $statement->bindParam(':programPhoto', $programBinaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':programPhoto_filename', $programNameFile, PDO::PARAM_LOB);


        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
