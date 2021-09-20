<?php
// Anonymous Functions

$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP <br>');

$example = function() {
    echo "Closure<br>";
};
$example();

function MyEcho() {
    echo "Ashinindavudha";
};
$myName = "MyEcho";
$myName();

echo "<br>";
$a = 15;
$calculate = function() {
    GLOBAL $a;
    $a += 100;
    echo $a . "\n";
};
$calculate();
echo $a . "\n";
echo "<br><hr>";


$cacl = function() use ($a) {
    $a +=100;
    echo $a . "\n";
};

$cacl();