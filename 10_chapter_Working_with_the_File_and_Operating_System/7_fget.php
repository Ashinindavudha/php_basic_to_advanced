<?php
$fh = fopen("home/www/data/users.txt", "r");
while (!feof($fh)) echo fgets($fh);
fclose($fh);
