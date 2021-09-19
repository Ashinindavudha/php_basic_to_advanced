<?php
   $uid = fileowner("home/www/data"); 
   // Returns "0" on Linux, as root typically has UID of 0.
   echo $uid;
?>