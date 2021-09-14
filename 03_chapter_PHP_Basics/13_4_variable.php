<?php
$myVar;
$myVar = 10;
echo $myVar . "<br>";

$myVar = 1; // int type
$myVar = 1.5; // float type

//float type evaluated as string type
echo $myVar . "<br>";

$myInt = 1234; // decimal number
$myInt = 0b10; // binary number (2 decimal)
$myInt = 0123; // octal number (83 decimal)
$myInt = 0x1A; // hexadecimal number (26 decimal)

$myFloat = 1.234;
$myFloat = 3e2; // 3*10^2 = 300

$myBool = true;
$myNull = null; // variable is set to null

$myInt = $myNull + 0;      // numeric context (0)
$myBool = $myNull == true; // bool context    (false)
$myUndefined = '';
echo $myNull . "<br>";              // string context  ("")
echo $myUndefined . "<br>";         // variable is set to null
