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

    static function getEvent(): array
    {
        $query = ' SELECT convention.firstDate, convention.secondDate, convention.thirdDate, convention.firstDateContent, convention.secondDateContent, convention.thirdDateContent, convention.description, convention.cost, convention.address, convention.poster, convention.poster_filename, convention.programPhoto, convention.programPhoto_filename';
        $query .= ' FROM convention';
        $statement = libDb::connect()->prepare($query);
        $successOrFailure = $statement->execute();
        $conventionInfo = $statement->fetch(PDO::FETCH_ASSOC);
        return $conventionInfo;
    }

    static function getVolunteerForm($firstName, $lastName, $birthday, $email, $phoneNumber, $dateArrival, $dateDepart, $dayOptions, $timeOptions, $workOptions, $extraWorkInfo, $diplomePSC1, $transport, $otherTransport, $lodging, $performance, $foodRestrictions, $otherInfo, $dateTime): bool
    {
        $query = ' INSERT INTO volunteerForm (firstName, lastName, birthday, email , phoneNumber, dateArrival, dateDepart, dayOptions, timeOptions, workOptions, extraWorkInfo, diplomePSC1, transport, otherTransport, lodging, performance, foodRestrictions, otherInfo, date_time_column) VALUES (:firstName, :lastName, :birthday, :email, :phoneNumber, :dateArrival, :dateDepart, :dayOptions, :timeOptions, :workOptions, :extraWorkInfo, :diplomePSC1, :transport, :otherTransport, :lodging, :performance,:foodRestrictions, :otherInfo, :date_time_column)';
        $statement = libDb::connect()->prepare($query);

        $statement->bindParam(':firstName', $firstName);
        $statement->bindParam(':lastName', $lastName);
        $statement->bindParam(':birthday', $birthday);
        $statement->bindParam(':phoneNumber', $phoneNumber);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':dateArrival', $dateArrival);
        $statement->bindParam(':dateDepart', $dateDepart);
        $statement->bindParam(':dayOptions', $dayOptions);
        $statement->bindParam(':timeOptions', $timeOptions);
        $statement->bindParam(':workOptions', $workOptions);
        $statement->bindParam(':extraWorkInfo', $extraWorkInfo);
        $statement->bindParam(':diplomePSC1', $diplomePSC1);
        $statement->bindParam(':transport', $transport);
        $statement->bindParam(':otherTransport', $otherTransport);
        $statement->bindParam(':lodging', $lodging);
        $statement->bindParam(':performance', $performance);
        $statement->bindParam(':foodRestrictions', $foodRestrictions);
        $statement->bindParam(':otherInfo', $otherInfo);
        $statement->bindParam(':date_time_column', $dateTime);

        $isSuccess = $statement->execute();
        return $isSuccess;
    }
}
