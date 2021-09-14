<?php
function retrieveUserProfile()
{
    $user[] = "Ashin";
    $user[] = "ashin@gmail.com";
    $user[] = "Myanmar";
    return $user;
}
list($name, $email, $language) = retrieveUserProfile();
echo "Name: $name, Email: $email, Language: $language";