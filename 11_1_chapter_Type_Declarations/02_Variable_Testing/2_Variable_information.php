<?php
// Variable information
$a = array('one', 'two', 'three'); 
print_r($a);

eval('$b = ' . var_export($a, true) . ';');
//Array ( [0] => one [1] => two [2] => three )