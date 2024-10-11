<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/cfg/config-prod.php';

class libDb
{
    /**
     * @return PDO connects to database
     */
    static function connect(): PDO
    {
        $dataSourceName = 'mysql:host=' . ConfigDB::HOST . ';port=' . ConfigDB::PORT . ';dbname=' .  ConfigDB::DBNAME;
        $dbConnection = new PDO($dataSourceName,  ConfigDB::USER,  ConfigDB::PASSWORD);
        //
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $dbConnection;
    }
}
