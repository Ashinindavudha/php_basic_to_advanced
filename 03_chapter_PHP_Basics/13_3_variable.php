
<?php
// what is a variable
// variable types
#php basic 
#understanding of php variable 
/*
string
integer
float /double
bolean
null
array
object
resource
*/
//declare variables
$name = 'Ashin';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;
//print the variables. explain what is
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';
//print types of the variables
echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($salary) . '<br>';
//print the whole variable
var_dump($name, $age, $isMale, $height, $salary) . '<br>';
// change the value of the vairable
$name = false;
// print type of the variable
echo gettype($name). '<br>';
//variable checking function
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true
//checking if variable is defined
isset($name); // true
isset($address); // fasle
//Constants
define('PI', 3.14);
echo PI. '<br>';
//using php built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX . '<br>';