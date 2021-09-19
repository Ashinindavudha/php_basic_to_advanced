<?php
//Isset
isset($a); // false
//echo $a; //Warning: Undefined variable $a 
$a = 10;
isset($a); // true
//echo $a;

$a = null;
isset($a); // false

// Empty
empty($b); // true

$b = false;
empty($b); // true

// Is_null
$c = null;
is_null($c); // true

$c = 10;
is_null($c); // false
is_null($d); // true (undefined variable notice)

$c = null;
$c === null; // true

// Unset
$e = 10;
unset($e); // delete $e

function myUnset() 
{
  // Make $o a reference to $GLOBALS['o']
  global $o;

  // Remove the reference variable
  unset($o);

  // Remove the global variable
  unset($GLOBALS['o']);
}

$var = null; // free memory
unset($var); // delete variable