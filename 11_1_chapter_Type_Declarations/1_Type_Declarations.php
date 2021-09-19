<?php
function myPrint(array $a)
{
    foreach ($a as $v)
    {
        echo $v;
    }
}
myPrint(array(1,2,3)); // 123
//myPrint('Test'); // error

function myCall(callable $callback, $data) 
{
  $callback($data);
}

$say = function($s) { echo $s; };
myCall( $say, 'Hi' ); // "Hi";

class MyClass {
  function myCallback($s) {
    echo $s;
  }
}

$o = new MyClass();
myCall( array($o, 'myCallback'), 'Hi' ); // "Hi"

function isTrue(bool $b) 
{
  return ($b === true);
}

echo isTrue(true);  // "1"
echo isTrue(false); // ""