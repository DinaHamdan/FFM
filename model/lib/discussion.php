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
class LibDiscussion
{
    //Create a post
    static function createDiscussion(string $discussionTitle, string $discussionContent, string $UserId,  $binaryFile, $nameFile, $dateTime): bool
    {
        $query = 'INSERT INTO discussion( title, content, idMember, illustration, illustration_filename, date_time_column) VALUES ( :title, :content, :idMember, :illustration, :illustration_filename, :date_time_column)';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':title', $discussionTitle);
        $statement->bindParam(':content', $discussionContent);
        $statement->bindParam(':idMember', $UserId);
        $statement->bindParam(':illustration', $binaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':illustration_filename', $nameFile, PDO::PARAM_STR);
        $statement->bindParam(':date_time_column', $dateTime);

        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
