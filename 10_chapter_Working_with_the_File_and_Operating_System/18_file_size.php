<?php
$file = "home/www/data/users.txt";
$bites = filesize("$file"); // return  File users.txtis 989 bytes, or 0.97kilobytes.
echo "File " .basename($file). "is $bites bytes, or " .round($bites / 1024, 2) . "kilobytes.";