<?php
 $subscriberInfo = "Jason Gilmore|wj@example.com";
   $fh = fopen("home/www/data/users.txt", "at");
   fwrite($fh, $subscriberInfo);
   fclose($fh);