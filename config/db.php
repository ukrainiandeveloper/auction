<?php

/**
 * Config Class DataBase
 */
class DB
{
    const user  = 'auction_admin';
    const pass  = 'DdaYaMG6bysXcbhA';
    const host  = 'localhost';
    const db    = 'auction';
    public static function connToDB() {
        $user = self::user;
        $pass = self::pass;
        $host = self::host;
        $db = self::db;

        $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
        return $conn;
    }
}