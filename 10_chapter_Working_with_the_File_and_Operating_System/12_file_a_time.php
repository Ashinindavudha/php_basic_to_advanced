<?php
// header("Content-type: text/css");
// $font_family = 'Arial, Helvetica, sans-serif';
// $font_size = '0.7em';
// $border = '1px solid';
// $color = 'red';

$file = "home/www/data/stat.php";
echo "File last accessed: " .date("<b>m-d-y g:i:sa</b>", fileatime($file));
