<?php
//*** Type Conversions ***
 
$myBool = false;
$myInt = (int)$myBool; // 0

echo $myBool;      // ""
echo (int)$myBool; // "0"

$myInt = 10;
$myArr = (array)$myInt;
$myArr = array($myInt); // same as above
echo $myArr[0]; // "10"

$myObj = (object)$myInt;
echo $myObj->scalar; // "10"

//$myNull = (unset)$myInt; //Fatal error: The (unset) cast is no longer supported 
$myNull = null; // same as above

$myVar = 1.2;
settype($myVar, 'int'); // convert variable to int

$myVar = 1.2;
$myVar = (int)$myVar; // 1

$myBool = true;
echo gettype($myBool); // "boolean"