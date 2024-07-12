
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
class LibUser
{
    // List User role
    static function getMemberRole(): array
    {
        $query = 'SELECT role.id, role.label';
        $query .= ' FROM role';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $memberRole = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $memberRole;
    }

    //List user with email only
    static function getMember(string $email): ?array
    {
        $query = 'SELECT member.id, member.email, member.pass, role.id AS idRole, role.code AS codeRole, role.label as roleLabel';
        $query .= ' FROM member ';
        $query .= ' JOIN role ON member.idRole = role.id';
        $query .= ' WHERE member.email= :email';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':email', $email);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
        if ($user == false) {
            $user = null;
        };
        return $user;
    }
    //Create a user
    static function createMember(string $email, string $password, string $passClear, string $idRole): bool
    {
        $query = 'INSERT INTO member ( email, pass, passClear, idRole) VALUES ( :email, :pass, :passClear, :idRole)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':email', $email);
        $statement->bindParam(':pass', $password);
        $statement->bindParam(':passClear', $passClear);
        $statement->bindParam(':idRole', $idRole);

        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}