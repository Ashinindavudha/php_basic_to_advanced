<?php
//use php_basic_to_advanced\Corporate_Drone;
//create new corporate_drone object
$drone1 = new Corporate_Drone();
//set the $drone1 employeeID member
$drone1->setEmployeeID("12345");
//clone the $drone1 object
$drone2 = clone $drone1;
// set the $drone2 empoloyeeid member
$drone2->setEmployeeID("67890");
// Output the $drone1 and $drone2 employeeid members
   echo "Drone1 employeeID: ".$drone1->getEmployeeID()."<br />";
   echo "Drone2 employeeID: ".$drone2->getEmployeeID()."<br />";
   echo "Drone2 tiecolor: ".$drone2->getTiecolor()."<br />";