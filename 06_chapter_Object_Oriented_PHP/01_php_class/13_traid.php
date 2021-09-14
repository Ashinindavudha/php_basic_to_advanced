<?php
trait PrintFunctionality
{
  public function myPrint() { echo 'Hello'; }
}

class MyClass
{
  // Insert trait methods
  use PrintFunctionality;
}

$o = new MyClass();
$o->myPrint(); // "Hello"

class MyParent
{
  public function myPrint() { echo 'Base'; }
}

class MyChild extends MyParent 
{
  // Overrides inherited method
  use PrintFunctionality;

  // Overrides trait inserted method
  public function myPrint() { echo 'Child'; }
}

$o = new MyChild();
$o->myPrint(); // "Child"