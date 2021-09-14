<?php
class MyRectangle
{
  public $x = 5, $y = 10;

  function newArea($a, $b) 
  { 
    return $a * $b; 
  }

  function getArea() 
  { 
    return $this->newArea($this->x, $this->y); 
  }

  function __construct($x, $y) 
  { 
    $this->x = $x; 
    $this->y = $y;
  }

  function __destruct() { echo "Destructed"; }
}

$r = new MyRectangle(5,10);
$r->x = 5; 
$r->y = 10;
$r->getArea(); // 50
unset($r); // "Destructed"