<?php
$file = "home/www/data/users.txt";
$fh = fopen($file, "rt");
$userdata = fread($fh, filesize($file));
echo $userdata;
fclose($fh);