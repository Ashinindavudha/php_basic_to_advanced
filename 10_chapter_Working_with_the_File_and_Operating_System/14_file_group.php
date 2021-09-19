<?php
$gid = filegroup("home/www");
//return "0" on unix, because root usually has GID  of 0.
echo $gid;