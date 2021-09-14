<?php
// Parent class (base class)
class Rectangle
{
  public $x, $y;
  function __construct($a, $b) 
  { 
    $this->x = $a; 
    $this->y = $b; 
  }
}

// Child class (derived class)
class Square extends Rectangle
{
  function __construct($a) 
  { 
    parent::__construct($a,$a); 
  }
}

$s = new Square(5,10);
$s->x = 5; $s->y = 10;
$s = new Square(5);

final class NotExtendable
{
  final function notOverridable() {}
}

$s = new Square(5);
$s instanceof Square;    // true
$s instanceof Rectangle; // true