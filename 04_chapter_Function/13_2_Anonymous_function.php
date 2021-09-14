<?php
$a = [1, 2, 3];

$squared = array_map(function($val) 
{ 
  return $val * $val;
}, $a);

foreach ($squared as $v)
  echo $v; // "149"