<?php
class Database {
    public static function connect() {
        $host = 'mariadb';
        $dbname = 'database';
        $user = 'admin';
        $password = 'changepassword';

        try {
            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=UTF8';
            $dbh = new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
    }
}