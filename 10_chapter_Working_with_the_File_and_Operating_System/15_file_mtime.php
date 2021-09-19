<?php
$file = "home/www/data/stat.php";
echo "File last updated : ", date("m-d-y- g:i:sa", filemtime($file));