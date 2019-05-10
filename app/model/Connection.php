<?php
namespace App\Model;

header('Content-Type: text/html; charset=utf-8');

class Connection
{
    public static $db;

    public static function doConnection()
    {
        try {
            $host = HOST;
            $db_name = DB;
            $user = USER;
            $pass = PASS;
            $db = new \PDO("mysql:host=$host;dbname=$db_name", "$user", "$pass");
        } catch (\PDOException $e) {
            echo "CONNECTION ERRO" . $e->getMessage();
        }
        return $db;
    }
}
