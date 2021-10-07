<?php
/*
Retrieving the Current Array Key
The key() function returns the key located at the current pointer position of the 
provided array. Its prototype follows:
mixed key(array array)
The following example will output the $capitals array keys by iterating over the 
array and moving the pointer
*/
$capitals = array("Ohio" => "Columbus", "Iowa" => "Des Moines");
echo "<p>Can you name the capitals of these states?</p>";
while($key = key($capitals)) {
 printf("%s <br />", $key);
 next($capitals);
}