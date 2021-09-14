<?php
// Foreach loop
$a = array(1, 2, 3);
foreach ($a as $v) { 
  echo $v . "<br>"; // "123"
}

//Associative array
$a = array('one' => 1, 'two' => 2, 'three' => 3);

foreach ($a as $k => $v) {
    echo "Associative array"; 
  echo "$k => $v <br>"; 
}