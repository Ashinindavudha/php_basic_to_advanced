<?php
/*
You’ll often find it useful to pass data into a function. As an example, let’s create a 
function that calculates an item’s total cost by determining its sales tax and then adding 
that amount to the price
-------------------------------------
This function accepts two parameters, aptly named $price and $tax, which are used 
in the calculation. Although these parameters are intended to be floating points, because 
of PHP’s weak typing, nothing prevents you from passing in variables of any data type, 
but the outcome might not be what you expect. In addition, you’re allowed to define 
as few or as many parameters as you deem necessary; there are no language-imposed 
constraints in this regard.
*/

// Passing Arguments by Value
function calculateSaleTax($price, $tax)
{
    return $price + ($price * $tax);
}
echo calculateSaleTax(15.00, .05687) . "<br>";



function calculateSalesTax()
{
    $pricetag = 15.00;
    $salestax = .0675;
    return $pricetag + ($pricetag * $salestax);
}
$total = calculateSalesTax();
echo $total;

/* 
When you pass an argument in this manner, it’s called passing by value. This means 
that any changes made to those values within the scope of the function are ignored 
outside of the function. In essence the interpreter creates a copy of each variable. If you 
want these changes to be reflected outside of the function’s scope, you can pass the 
argument by reference, introduced next.
*/