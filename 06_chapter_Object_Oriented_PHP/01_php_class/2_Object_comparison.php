<?php
// Object comparison
class Flag {
  public $flag = true;
}

$a = new Flag();
$b = new Flag();

$c = ($a == $b);  // true (same values)
$d = ($a === $b); // false (different instances)

// Anonymous classes
$obj = new class {};

$o = new class('Hi') 
{
  public $x;
  public function __construct($a) 
  {
    $this->x = $a;
  }  
};

echo $o->x; // "Hi";