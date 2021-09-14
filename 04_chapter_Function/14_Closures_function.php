<?php
// Closures
$x = 1;
$y = 2;

$myClosure = function($z) use ($x, $y) 
{
  return $x + $y + $z;
};

echo $myClosure(3); // "6"