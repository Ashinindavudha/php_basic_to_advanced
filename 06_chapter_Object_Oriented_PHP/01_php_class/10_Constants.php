<?php

use MyCircle as GlobalMyCircle;

class MyCircle
{
    const PI = 3.14;
}
echo MyCircle::PI . "<br>"; //// "3.14"
const PI = 3.14;
echo PI ."<br>";

define('DEBUG', 1);
echo DEBUG ."<br>"; //1

if (!defined('PI')) 
  define('PI', 3.14); 

const CA = [1,2,3];// PHP 5.6 or later
define('DA', [1,2,3]); // PHP 7 or later


//const and define
const pi = 3.14; // compile-time constant
define('E', 2.72); // run-time constant
//magic constants
if (!isset($var)) {
    echo '$var not set on line' . __LINE__;
}


