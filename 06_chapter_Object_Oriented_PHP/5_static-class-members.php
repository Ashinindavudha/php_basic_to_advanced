<?php
class Visitors
{
    private static $visitors = 0;

    function __construct()
    {
        self::$visitors++;

    }

    static function getVisitors()
    {
        return self::$visitors;
    }
}

// instantiate the visitors class
$visits = new Visitors();

echo Visitors::getVisitors(). "<br>";
//instantiate another visitors class
$visits2 = new Visitors();
echo Visitors::getVisitors(). "<br>";