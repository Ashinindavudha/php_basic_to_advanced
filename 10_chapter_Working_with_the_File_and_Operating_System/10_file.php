<?php
 $users = file("home/www/data/user.txt");
 foreach ($users as $user) {
     list($name, $email) = explode(" ", $user);

     // remove newline from $email

     $email = trim($email);
    echo "<a href=\"mailto:$email\">$name</a> <br />\n"; 
 }