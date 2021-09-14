<?php
// Bitwise operators
$x = 5 & 4;  // 101 & 100 = 100 (4) // and
$x = 5 | 4;  // 101 | 100 = 101 (5) // or
$x = 5 ^ 4;  // 101 ^ 100 = 001 (1) // xor (exclusive or)
$x = 4 << 1; // 100 << 1  =1000 (8) // left shift
$x = 4 >> 1; // 100 >> 1  =  10 (2) // right shift
$x = ~4;     // ~00000100 = 11111011 (-5) // invert

$x=5; $x &= 4;  // 101 & 100 = 100 (4) // and
$x=5; $x |= 4;  // 101 | 100 = 101 (5) // or
$x=5; $x ^= 4;  // 101 ^ 100 = 001 (1) // xor
$x=5; $x <<= 1; // 101 << 1  =1010 (10)// left shift
$x=5; $x >>= 1; // 101 >> 1  =  10 (2) // right shift

$x = 0b101 & 0b100; // 0b100 (4)

// Additional logical operators
// Same as: $a = (true && false);
$a = true && false; // $a is false
 
// Same as: ($a = true) and false;
$a = true and false; // $a is true

$a = (true xor true); // false
 
