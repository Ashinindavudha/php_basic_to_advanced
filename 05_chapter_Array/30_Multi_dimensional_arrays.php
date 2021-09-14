<?php
// Multi-dimensional arrays
$a = array(array('00', '01'), array('10', '11'));

$a[0][0] = '00';
$a[0][1] = '01';
$a[1][0] = '10';
$a[1][1] = '11';

echo $a[0][0] . $a[0][1] . $a[1][0] . $a[1][1];

$b = array('one' => array('00', '01'));
echo $b['one'][0] . $b['one'][1]; // "0001"

$c[][][][] = "0000"; // four dimensions