<?php
// For loop
for ($i = 0; $i < 10; $i++) { echo $i; } // 0-9
for (;$i < 10;) { echo $i++; }

$a = array(1,2,3);

for($i = 0; $i < sizeof($a); $i++) {
  echo $i; // "123"
}