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

    //List all posts
    static function getAllDiscussion(): array
    {
        $query = 'SELECT discussion.id, discussion.title, discussion.content';
        $query .= ' FROM discussion ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $listDiscussion = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $listDiscussion;
    }

    static function getDiscussion($idDiscussion): array
    {
        $query = 'SELECT discussion.id, discussion.title, discussion.content, discussion.illustration, discussion.date_time_column';
        $query .= ' FROM discussion ';
        $query .= ' WHERE discussion.id = :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idDiscussion);

        $successOrFailure = $statement->execute();
        $discussion = $statement->fetch(PDO::FETCH_ASSOC);
        $discussion['time'] = date('Y-m-d h:i:s', strtotime($discussion['date_time_column']));
        $discussion['comments'] = LibDiscussion::listComment($discussion['id']);

        return $discussion;
        // Ajoute une colonne avec la date de l'article formatée,
        // et charge les commentaires de chaque article
        /*  $listDiscussionWithAdditionalInfo = [];
        foreach ($listDiscussion as $discussion) {

          
            $post['likes'] = (LibPost::listLike($post['id']));
            $post['nbLikes'] = count(LibPost::listLike($post['id']));
            $listPostWithAdditionalInfo[] = $post;
        }

        return $listPostWithAdditionalInfo; */
    }

    //Create a comment
    static function createComment(string $commentContent, string $idMember,  string $idDiscussion, $dateTime): bool
    {
        $query = 'INSERT INTO comment( content, idMember, idDiscussion, date_time_column) VALUES ( :content, :idMember, :idDiscussion, :date_time_column)';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':content', $commentContent);
        $statement->bindParam(':idMember', $idMember);
        $statement->bindParam(':idDiscussion', $idDiscussion);
        $statement->bindParam(':date_time_column', $dateTime);

        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    //List comment added to get all posts function
    static function listComment(string $idDiscussion): array
    {
        $query = 'SELECT comment.id, comment.content, comment.idDiscussion, comment.idMember, comment.date_time_column';
        $query .= ' FROM comment ';
        $query .= 'WHERE comment.idDiscussion = :id';

        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idDiscussion);
        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $listComment = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $listComment;
        /*         // Add a column with formatted data
        $listCommentWithAdditionalInfo = [];
        foreach ($listComment as $comment) {
            $comment['time'] = date('Y-m-d h:i:s', strtotime($comment['date_time_column']));

            //Add user avatar for each comment
            $comment['userAvatar'] = LibPost::getAvatar($comment['idUtilisateur']);
            $listCommentWithAdditionalInfo[] = $comment;
        }

        return $listCommentWithAdditionalInfo; */
    }
}
