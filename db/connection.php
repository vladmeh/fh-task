<?php

class MysqlDB
{
    const USERNAME="root";
    const PASSWORD="root";
    const HOST="localhost";
    const PORT="3306";
    const DB="fh-task";

    public static function getConnection(){
        if ($_SERVER['SERVER_NAME'] == "fh-task-demo.herokuapp.com") {
            $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
            $host = $url["host"];
            $username = $url["user"];
            $password = $url["pass"];
            $db = substr($url["path"], 1);
        } else {
            $username = self::USERNAME;
            $password = self::PASSWORD;
            $host = self::HOST;
            $db = self::DB;
        }

        try {
            $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password, [
                PDO::ATTR_PERSISTENT => true
            ]);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}