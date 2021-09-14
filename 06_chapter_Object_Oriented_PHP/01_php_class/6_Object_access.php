<?php
// Object access
class MyClass
{
  private $myPrivate;

  function setPrivate($obj, $val) {    
    $obj->myPrivate = $val; // set private property
  }
}

$a = new MyClass();
$b = new MyClass();
$a->setPrivate($b, 10);
//echo $b->$val;
/* Warning: Undefined variable $val in C:\xampp\htdocs\php_basic_to_advanced\06_chapter_Object_Oriented_PHP\01_php_class\6_Object_access.php on line 15

Warning: Undefined property: MyClass::$ in C:\xampp\htdocs\php_basic_to_advanced\06_chapter_Object_Oriented_PHP\01_php_class\6_Object_access.php on line 15 */