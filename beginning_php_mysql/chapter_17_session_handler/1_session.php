<?php
//initiate session and create a few session variables
session_start();
//set a few session variables.
$_SESSION['username'] = "ashin";
$_SESSION['loggedon'] = date("M d Y H:i:s");

//encode all session data into a single string adn return the result
$sessionVars = session_encode();
echo $sessionVars;
//output
#username|s:5:"ashin";loggedon|s:20:"Sep 23 2021 09:33:30";