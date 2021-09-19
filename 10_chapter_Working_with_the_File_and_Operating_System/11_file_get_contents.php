<?php
$userfile = file_get_contents("home/www/data/user.txt");
//place each line of $userfile into array
$users = explode("\n", $userfile);
foreach($users as $user) {
    list($name, $email) = explode(" ", $user);
    echo "<a href=\"mailto:$email\">$name/a> <br />";

}