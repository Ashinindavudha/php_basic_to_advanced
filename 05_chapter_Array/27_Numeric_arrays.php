<?php
// Numeric arrays
$a = array(1,2,3);
$a = [1,2,3];

$a[0] = 1;
$a[1] = 2;
$a[2] = 3;

$a[3] = 4;
$a[] = 5; // $a[4]

echo "$a[0] $a[1] $a[2] $a[3]"; // "1 2 3 4"