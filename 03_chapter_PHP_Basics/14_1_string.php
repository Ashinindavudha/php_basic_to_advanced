<?php
//*** String ***
 
$a = 'Hello';

$b = $a . ' World'; // Hello World
$a .= ' World';     // Hello World

$c = 'World';
echo "Hello $c"; // "Hello World"
echo 'Hello $c'; // "Hello $c"

$s = <<<LABEL
Heredoc (with parsing)
LABEL;

$s = <<<'LABEL'
Nowdoc (without parsing)
LABEL;

$s = "Hello\nWorld";
echo "Hello<br>World";
$s = 'It\'s'; // "It's"

echo "\u{00C2A9}"; // © (copyright sign)
echo "\u{C2A9}";   // ©

$s = 'Hello';
$s[0] = 'J';
echo $s; // "Jello"

$s[strlen($s)-1] = 'y';
echo $s; // "Jelly"

$a = 'test';
$b = 'test';
$c = ($a === $b); // true