<?php
// Extracting Columns
$simpsons = [
 ['name' => 'Homer Simpson', 'gender' => 'Male'],
 ['name' => 'Marge Simpson', 'gender' => 'Female'],
 ['name' => 'Bart Simpson', 'gender' => 'Male']
];
$names = array_column($simpsons, 'name');
print_r($names);
//output
// Array ( [0] => Homer Simpson [1] => Marge Simpson [2] => Bart Simpson )