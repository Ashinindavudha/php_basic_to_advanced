<?php
// Default parameters
function myFunc($x, $y = " Earth") 
{ 
  echo $x . $y; 
} 
 
myFunc("Hello"); // "Hello Earth"