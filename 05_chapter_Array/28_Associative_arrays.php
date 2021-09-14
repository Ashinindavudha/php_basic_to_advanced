<?php
//Associative arrays
$b = array('one' => 'a', 'two' => 'b', 'three' => 'c');

$b['one']   = 'a';
$b['two']   = 'b';
$b['three'] = 'c';

echo $b['one'] . $b['two'] . $b['three']; // "abc" 

$c = array(0 => 0, 1 => 1, 2 => 2);
$e = array(5 => 5, 6);