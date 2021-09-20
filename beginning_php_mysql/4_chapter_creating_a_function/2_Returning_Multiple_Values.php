<?php
// Returning Multiple Value
$colors = ["red", "blue", "green"];
list($color1, $color2, $color3) = $colors;
//echo $colors.[0];

/*
Once the list() construct executes, $color1, $color2, and $color3 will be assigned 
red, blue, and green, respectively. List() looks like a function but it is actually a language 
construct and used on the left side of the assign operator(=) compared to functions that 
are used on the right-hand side to calculate and return values that are assigned.
Building on the concept demonstrated in the previous example, you can imagine 
how the three prerequisite values might be returned from a function using list()
*/