<?php

namespace db;

use mysqli;

abstract class ManagementDatabase
{
    private static string $username = "b32_35715263";
    private static string $password = "C9rKK3Zyef1KGEH";
    private static string $hostname = "sql312.byethost32.com";
    private static string $database = "b32_35715263_pnotltd";
    private static object $connection;

    private static function connect(): void
    {
        self::$connection = new mysqli(self::$hostname, self::$username, self::$password, self::$database, 3306);

        if (self::$connection->connect_error)
        {
            die("error");
        }
    }

    public static function query($sql)
    {
        self::connect();
        $result = self::$connection->query($sql);
        return $result;
    }
}