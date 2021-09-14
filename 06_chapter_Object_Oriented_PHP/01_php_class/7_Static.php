<?php
class MyCircle 
{
    // Static/class members (only one copy)
    static $pi = 3.14;
    //instance member (one per object)
    public $r = 10;
    function getArea()
    {
        return self::newArea($this->$r);
    }
    static function newArea($a)
    {
        return self::$pi * $a * $a;
    }
}
echo MyCircle::$pi; // "3.14"
echo MyCircle::newArea(10); // "314"