<?php

namespace core\model\database;

use \PDO;
use \Exception;


class database {

    private static $dbConnection = null;

    public static function getDB() {

        if (self::$dbConnection === null) {

            $config = new config();

            try {
                $dbConnection = new PDO("$config->DB:host=$config->dbhost;dbname=$config->dbname", $config->dbuser, $config->dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                
                

                die('Erreur data base: ' . $e->getMessage());
            }
            self::$dbConnection = $dbConnection;
        }

        return self::$dbConnection;
    }

}
