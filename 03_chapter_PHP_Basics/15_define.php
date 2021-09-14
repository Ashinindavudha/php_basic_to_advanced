<?php
define("PI", 3.141592);
print "The value of pi is ".PI.".<br />";
$pi2 = 4 * PI;
print "Pi doubled equals $pi2.";

/*
//output
The value of pi is 3.141592.
Pi doubled equals 12.566368.
// Note
Constants
A constant is a value that cannot be modified throughout the execution of a program. Constants 
are particularly useful when working with values that definitely will not require modification, 
such as pi (3.141592) or the number of feet in a mile (5,280). Once a constant has been defined, 
it cannot be changed (or redefined) at any other point of the program. Constants are defined 
using the define() function.
define()
boolean define (string name, mixed value [, bool case_insensitive])
The define() function defines a constant, specified by name, assigning it the value value. If the 
optional parameter case-insensitive is included and assigned TRUE, subsequent references to 
the constant will be case insensitive. Consider the following example, in which the mathematical 
constant PI is defined:
define("PI", 3.141592); Constants
A constant is a value that cannot be modified throughout the execution of a program. Constants 
are particularly useful when working with values that definitely will not require modification, 
such as pi (3.141592) or the number of feet in a mile (5,280). Once a constant has been defined, 
it cannot be changed (or redefined) at any other point of the program. Constants are defined 
using the define() function.
define()
boolean define (string name, mixed value [, bool case_insensitive])
The define() function defines a constant, specified by name, assigning it the value value. If the 
optional parameter case-insensitive is included and assigned TRUE, subsequent references to 
the constant will be case insensitive. Consider the following example, in which the mathematical 
constant PI is defined:
define("PI", 3.141592); 
*/