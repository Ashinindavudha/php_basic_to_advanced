<?php
$class1 = array("Ashin" => 100, "Indavudha" => 85);
$class2 = array("MoyKhing" => 78, "John" => 45);
$classScores = array_merge_recursive($class1, $class2);
print_r($classScores);