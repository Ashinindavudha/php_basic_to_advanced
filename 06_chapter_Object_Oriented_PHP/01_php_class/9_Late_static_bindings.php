<?php
//Late static bindings

use MyChild as GlobalMyChild;

class MyParent
{
    protected static $val = 'parent';
    public static function getLatebindVal()
    {
        return static::$val;
    }
}
class MyChild extends MyParent
{
    protected static $val = 'child';
}
echo MyChild::getLatebindVal(); //'child