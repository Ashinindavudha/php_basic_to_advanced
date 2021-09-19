<?php
$fh = fopen("home/www/data/users.txt", "r");
//parse each SSN in accordance with integer-integer format
while ($user = fscanf($fh, "%d-%d-%d"))
{
list ($part1, $part2, $part3) = $user;
}
fclose($fh);
