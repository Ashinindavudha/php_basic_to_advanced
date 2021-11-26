<?php
class Connection
{
    public static function make($config)
    {
        try {
            return $pdo = new PDO(
                $config['host'].';dbname='.$config['dbName'],
                $config['username'],
                $config['password'],
                //$config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
