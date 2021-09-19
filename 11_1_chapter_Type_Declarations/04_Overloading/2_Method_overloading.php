<?php
// Method overloading

//use MyClass as GlobalMyClass;

class MyClass{
    public function __call($name, $args)
    {
       echo "Calling $name $args[0]"; 
    }
    public static function __callStatic($name, $args)
    {
        echo "Calling $name $args[0]";
    }
}

// "Calling myTest in object context <br>"
(new MyClass())->myTest('in object context');
// "Calling myTest in static context"
MyClass::myTest('in static context');