<?php
class MyClass
{
    public $myPublic = 'public';
    protected $myProtected = 'protected';
    private $myPrivate = 'private';

    function test(){
        echo $this->myPublic; // allowed
        echo $this->myProtected; // allowed
        echo $this->myPrivate; // allowed

    }
}
class MyChild extends MyClass
{
  function test()
  {
    echo $this->myPublic;    // allowed
    echo $this->myProtected; // allowed
    echo $this->myPrivate;   // inaccessible	
  }  
}

$m = new MyClass();
echo $m->myPublic;    // allowed	
echo $m->myProtected; // inaccessible	
echo $m->myPrivate;   // inaccessible

class MyVars
{
  var $x, $y; // deprecated property declaration
}