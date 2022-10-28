<?php

class DBConnection
{
//Database connection data
    private static $servername = "localhost";
    private static $dbname = "logins";
    private static $username = "logins";
    private static $password = "YOUR_PASSWORD";

    public static function connectDB(): ?PDO
    {
        $servername = self::$servername;
        $dbname = self::$dbname;
        $username = self::$username;
        $password = self::$password;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}
