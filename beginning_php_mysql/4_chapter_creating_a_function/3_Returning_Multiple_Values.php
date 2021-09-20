
<?php
/* 
It’s often convenient to return multiple values from a function. For example, suppose 
that you’d like to create a function that retrieves user data from a database (say the 
user’s name, e-mail address, and phone number) and returns it to the caller. The list()
construct offers a convenient means for retrieving values from an array, like so
*/
// Returning Multiple Value
function retrieveUserProfile()
{
    $user[] = "Ashin";
    $user[] = "Indavudha@gmail.com";
    $user[] = "Myanmar";
    return $user;
}
list($name, $email, $language) = retrieveUserProfile();
echo "Name: {$name}, email: {$email}, language: {$language}";