<?php
$states = array("ashin", "indavudha", "ashin@gmail.com", "Myanmar");
$stateFrequency = array_count_values($states);
print_r($stateFrequency);