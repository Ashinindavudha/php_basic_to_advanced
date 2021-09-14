<?php
$array1 = array("OH","CA","NY","HI","CT");
$array2 = array("OH","CA","HI","NY","IA");
$array3 = array("TX","MD","NE","OH","HI");
$interesection = array_intersect($array1, $array2, $array3);
print_r($interesection);