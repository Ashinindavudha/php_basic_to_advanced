<?php
$x = null;
$name = $x ?? 'unknown'; // unknown
$name = isset($x) ? $x : 'unknown';
//echo $name; // unknown
