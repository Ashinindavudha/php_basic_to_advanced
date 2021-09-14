<?php
//define a base Employee class

use Employee as GlobalEmployee;

class Employee
{
    private $name;
    //define a setter for the private $name member
    function setName($name)
    {
        if ($name == "") {
            echo "Name cannot be blank!"; 
        } else $this->name = $name;
    }
    function getName()
    {
        return "My name is ". $this->name. "<br>";
    }
} // end employee class
//define an executive class that inherits employee
class Executive extends Employee {
    //define a method unique to employee
    function pillageCompany() {
        echo "I'm selling company assets to finance my yacht!";
    }
} // end Executive class
//create a new Executive object
$exec = new Executive();
//call the setName() method, defined in the Employee class
$exec->setName("AshinIndavudha");
//call the getName() method
echo $exec->getName();
//call the pillageCompany() method
$exec->pillageCompany();