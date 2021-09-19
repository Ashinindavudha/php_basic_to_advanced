<?php
$file = "home/www/data/stat.php";

echo "File inode last changed: " . date("m-d-y g:i:sa", fileatime($file));