<?php
//open the users.txt
$users = file("users.txt");
//while the end of file (EOF) HASN'T been reached, get next line 
foreach($users as $user){
    //use explode() to separate each piece of data.
    list($name, $occupation, $color) = explode("|", $user);
    //format and output the data
    printf("Name: %s <br>", isset($_GET[$name]));
    printf("Occupation: %s <br>", isset($_GET[$occupation]));
    printf("Favorite color: %s <br>", isset($_GET[$color]));
}