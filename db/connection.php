<?php

class MysqlDB
{
    const USERNAME="root";
    const PASSWORD="root";
    const HOST="localhost";
    const PORT="3306";
    const DB="fh-task";

    public static function getConnection(){
            $username = self::USERNAME;
            $password = self::PASSWORD;
            $host = self::HOST;
            $port = self::PORT;
            $db = self::DB;

        try {
            $connection = new PDO("mysql:dbname=$db;host=$host;port=$port", $username, $password, [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_PERSISTENT => true
            ]);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}