<?php

//use Rectangle as GlobalRectangle;

abstract class Shape{
private $x = 100, $y = 100;
abstract public function getArea();
}
class Rectangle extends Shape
{
    public function getArea()
    {
        return $this->x * $this->y;
    }
}

//echo Rectangle::getArea();
/*Fatal error: Uncaught Error: Non-static method Rectangle::getArea() cannot be called statically in C:\xampp\htdocs\php_basic_to_advanced\06_chapter_Object_Oriented_PHP\01_php_class\12_Abstract.php:17 Stack trace: #0 {main} thrown in C:\xampp\htdocs\php_basic_to_advanced\06_chapter_Object_Oriented_PHP\01_php_class\12_Abstract.php on line 17 */
class NonAbstract{}
abstract class MyAbstract extends NonAbstract {}
//define default functionality and definitions
abstract class Shaper 
{
    public $x = 100, $y = 100;
    abstract public function getArea();
}
// Class is a Shape 
class Rectangle extends Shape { /*…*/ }
// Defines a specific functionality
interface iComparable
{
  function compare();
}
// Class can be compared
class MyClass implements iComparable { /*…*/ }