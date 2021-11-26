<?php
class Connection
{
    public static function getConnection()
    {
        $host = "localhost";
        $db_name = "php_crud_basic";
        $username = "root";
        $password = "";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
