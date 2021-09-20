<?php
/*
Using Type Declarations
Admittedly, I’m putting the cart ahead of the course when it comes to the topic of type 
hinting, because in this section I’m forced to reference certain terminology and concepts 
that haven’t yet been formally introduced. However, for sake of completeness, it makes 
sense to include this section in this particular chapter; therefore, if you find any of this 
confusing, feel free to bookmark this page and return to this section after having read 
everything through Chapter 7. PHP 5 introduced a new feature known as type hinting, 
later renamed to type declarations, which gives you the ability to force parameters to be 
objects, interfaces, callable, or arrays. The support for scalar (numbers and strings) type 
hinting was added to PHP 7.0. If the provided parameter is not of the desired type, a fatal 
error will occur. As an example, suppose you create a class named Customer and want to 
be certain that any parameter passed to a function named processPayPalPayment() was 
of type Customer. You could use type hinting to implement this restriction, like so:

function processPayPalPayment(Customer $customer) {
 // Process the customer's payment
}
PHP 7.0 also introduces type hinting for the return values and is done by adding 
:<type> after the closing parenthesis in the argument list.
function processPayPalPayment(Customer $customer): bool {
 // Process the customer's payment
}
In the example above, a fatal error will be invoked if the function tries to return 
anything but true or false.

*/