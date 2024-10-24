
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
class LibMember
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
        $query = 'SELECT member.id, member.firstName, member.lastName, member.avatar, member.email, member.pass, role.id AS idRole, role.code AS codeRole, role.label as roleLabel';
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

    //List user with email only
    static function getMemberByNumber(string $phoneNumber): ?array
    {
        $query = 'SELECT member.id, member.firstName, member.lastName, member.avatar, member.email, member.pass, role.id AS idRole, role.code AS codeRole, role.label as roleLabel';
        $query .= ' FROM member ';
        $query .= ' JOIN role ON member.idRole = role.id';
        $query .= ' WHERE member.phoneNumber= :phoneNumber';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':phoneNumber', $phoneNumber);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
        if ($user == false) {
            $user = null;
        };
        return $user;
    }
    //List user with id
    static function getMemberById(string $memberId): ?array
    {
        $query = 'SELECT member.id, member.firstName, member.lastName, member.phoneNumber';
        $query .= ' FROM member ';
        $query .= ' WHERE member.id= :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $memberId);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        // var_dump($user);
        if ($user == false) {
            $user = null;
        };
        return $user;
    }

    //Create a Member
    static function createMember(string $email, string $passHash, string $passClear, string $idRole): bool
    {
        $query = 'INSERT INTO member ( email, pass, passClear, idRole) VALUES ( :email, :pass, :passClear, :idRole)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':email', $email);
        $statement->bindParam(':pass', $passHash);
        $statement->bindParam(':passClear', $passClear);
        $statement->bindParam(':idRole', $idRole);

        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    //Complete Member profile
    static function completeProfile(string $idMember, string $lname, string $fname, string $phoneNumber, $binaryFile, $nameFile): bool
    {

        $query = 'UPDATE  member SET firstName = :firstName, lastName = :lastName, phoneNumber = :phoneNumber, avatar = :avatar, avatar_filename = :avatar_filename WHERE id = :id';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':firstName', $fname);
        $statement->bindParam(':lastName', $lname);
        $statement->bindParam(':phoneNumber', $phoneNumber);
        $statement->bindParam(':avatar', $binaryFile, PDO::PARAM_LOB);
        $statement->bindParam(':avatar_filename', $nameFile, PDO::PARAM_STR);
        $statement->bindParam(':id', $idMember);

        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    //Create contact message 
    static function CreateContactMessage(string $messageType, string $idRole, string $firstName, string $lastName, string $email, string $phoneNumber, string $messageContent, string $dateTime): bool
    {
        $query = 'INSERT INTO contactMessage ( type, idRole, firstName, lastName, email, phoneNumber, content, date_time_column) VALUES ( :type, :idRole, :firstName, :lastName, :email, :phoneNumber, :content, :date_time_column)';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':type', $messageType);
        $statement->bindParam(':idRole', $idRole);
        $statement->bindParam(':firstName', $firstName);
        $statement->bindParam(':lastName', $lastName);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phoneNumber', $phoneNumber);
        $statement->bindParam(':content', $messageContent);
        $statement->bindParam(':date_time_column', $dateTime);


        $isSuccess = $statement->execute();
        return $isSuccess;
    }

    /*     //List type of juggling props
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

 */
    //Create contact message 
    static function CreateAdhesion(string $firstName, string $lastName, string $email, string $phoneNumber, string  $agreType, string  $typeAdhesion, string $talents, string $authorization, string $dateTime): bool
    {
        $query = 'INSERT INTO adhesion ( firstName, lastName, email, phoneNumber, typeAgre, typeAdhesion, talents, authorization, date_time_column) VALUES (  :firstName, :lastName, :email, :phoneNumber, :typeAgre, :typeAdhesion, :talents, :authorization, :date_time_column)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':firstName', $firstName);
        $statement->bindParam(':lastName', $lastName);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':phoneNumber', $phoneNumber);
        $statement->bindParam(':typeAgre', $agreType);
        $statement->bindParam(':typeAdhesion', $typeAdhesion);
        $statement->bindParam(':talents', $talents);
        $statement->bindParam(':authorization', $authorization);
        $statement->bindParam(':date_time_column', $dateTime);


        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    //List all contact messages 
    static function getAllContactMessage(): array
    {
        $query = 'SELECT contactMessage.id, contactMessage.type, contactMessage.firstName, contactMessage.lastName, contactMessage.phoneNumber, contactMessage.email, contactMessage.content, contactMessage.date_time_column';
        $query .= ' FROM contactMessage ';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $allContactMessage = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Add a column with formatted time data
        $listContactMessageWithTime = [];
        foreach ($allContactMessage as $contactMessage) {
            $contactMessage['time'] = date('Y-m-d h:i:s', strtotime($contactMessage['date_time_column']));


            $listContactMessageWithTime[] = $contactMessage;
        }

        return $listContactMessageWithTime;
    }

    //list a specific contact message
    static function getContactMessage($idContactMessage): array
    {
        $query = 'SELECT contactMessage.id, contactMessage.type, contactMessage.firstName, contactMessage.lastName, contactMessage.phoneNumber, contactMessage.email, contactMessage.content, contactMessage.date_time_column';
        $query .= ' FROM contactMessage ';
        $query .= ' WHERE contactMessage.id = :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idContactMessage);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $contactMessage = $statement->fetch(PDO::FETCH_ASSOC);

        $contactMessage['time'] = date('Y-m-d h:i:s', strtotime($contactMessage['date_time_column']));

        return $contactMessage;
    }

    //List all adhesion forms
    static function getAllAdhesion(): array
    {
        $query = 'SELECT adhesion.id, adhesion.firstName, adhesion.lastName, adhesion.phoneNumber, adhesion.email, adhesion.typeAgre, adhesion.authorization,adhesion.talents, adhesion.date_time_column';
        $query .= ' FROM adhesion ';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $allAdhesion = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Add a column with formatted time data
        $listAdhesionWithTime = [];
        foreach ($allAdhesion as $adhesion) {
            $adhesion['time'] = date('Y-m-d h:i:s', strtotime($adhesion['date_time_column']));

            $listAdhesionWithTime[] = $adhesion;
        }

        return $listAdhesionWithTime;
    }

    //List a specific adhesion form
    static function getAdhesion($idAdhesion): array
    {
        $query = 'SELECT adhesion.id, adhesion.firstName, adhesion.lastName, adhesion.phoneNumber, adhesion.email, adhesion.typeAgre, adhesion.authorization,adhesion.talents, adhesion.date_time_column';
        $query .= ' FROM adhesion ';
        $query .= ' WHERE adhesion.id = :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idAdhesion);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $adhesion = $statement->fetch(PDO::FETCH_ASSOC);
        $adhesion['time'] = date('Y-m-d h:i:s', strtotime($adhesion['date_time_column']));
        return $adhesion;
    }


    //List all volunteer forms
    static function getAllVolunteerForm(): array
    {
        $query = 'SELECT volunteerForm.idVolunteer, volunteerForm.firstName, volunteerForm.lastName, volunteerForm.phoneNumber, volunteerForm.email, volunteerForm.birthday, volunteerForm.dateArrival, volunteerForm.dateDepart, volunteerForm.dayOptions, volunteerForm.timeOptions, volunteerForm.workOptions, volunteerForm.extraWorkInfo, volunteerForm.diplomePSC1, volunteerForm.transport, volunteerForm.otherTransport, volunteerForm.lodging, volunteerForm.performance, volunteerForm.foodRestrictions, volunteerForm.otherInfo, volunteerForm.date_time_column';
        $query .= ' FROM volunteerForm ';
        $statement = libDb::connect()->prepare($query);

        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $allVolunteerForm = $statement->fetchAll(PDO::FETCH_ASSOC);

        // Add a column with formatted time data
        $listVolunteerFormWithTime = [];
        foreach ($allVolunteerForm as $volunteerForm) {
            $volunteerForm['time'] = date('Y-m-d h:i:s', strtotime($volunteerForm['date_time_column']));

            $listVolunteerFormWithTime[] = $volunteerForm;
        }

        return $listVolunteerFormWithTime;
    }

    //List a specific volunteer forms
    static function getVolunteerForm($idVolunteerForm): array
    {
        $query = 'SELECT volunteerForm.idVolunteer, volunteerForm.firstName, volunteerForm.lastName, volunteerForm.phoneNumber, volunteerForm.email, volunteerForm.birthday, volunteerForm.dateArrival, volunteerForm.dateDepart, volunteerForm.dayOptions, volunteerForm.timeOptions, volunteerForm.workOptions, volunteerForm.extraWorkInfo, volunteerForm.diplomePSC1, volunteerForm.transport, volunteerForm.otherTransport, volunteerForm.lodging, volunteerForm.performance, volunteerForm.foodRestrictions, volunteerForm.otherInfo, volunteerForm.date_time_column';
        $query .= ' FROM volunteerForm';

        $query .= ' WHERE volunteerForm.idVolunteer = :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idVolunteerForm);
        // - Exécute la requête
        $successOrFailure = $statement->execute();
        $volunteerForm = $statement->fetch(PDO::FETCH_ASSOC);

        $volunteerForm['time'] = date('Y-m-d h:i:s', strtotime($volunteerForm['date_time_column']));
        return $volunteerForm;
    }

    static function listAllMember(): array
    {
        $query = 'SELECT member.id, member.firstName, member.lastName, member.email, member.phoneNumber, member.avatar';
        $query .= ' FROM member ';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $member = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $member;
    }

    //Delete member
    static function deleteMember(string $idMember): bool
    {
        $query = 'DELETE FROM member WHERE  id= :id';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':id', $idMember);
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
    static function updatePass(string $passClear, string $passHash, string $email): bool
    {

        $query = 'UPDATE member SET pass = :pass, passClear = :passClear WHERE email = :email ';
        $statement = libDb::connect()->prepare($query);
        $statement->bindParam(':passClear', $passClear);
        $statement->bindParam(':pass', $passHash);
        $statement->bindParam(':email', $email);
        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }


    static function updatePassword(string $memberId, string $passHash, string $passClear): bool
    {

        $query = 'UPDATE  member SET pass = :pass, passClear = :passClear WHERE id = :id';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':pass', $passHash);
        $statement->bindParam(':passClear', $passClear);
        $statement->bindParam(':id', $memberId);


        // - Exécute la requête
        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
