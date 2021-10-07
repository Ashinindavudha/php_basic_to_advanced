<?php
$summary = <<< summary
In the latest installment of the ongoing Developer.com PHP series, 
I discuss the many improvements and additions to 
<a href="http://www.php.net">PHP 5's</a> object-oriented architecture.
summary;
$words = sizeof(explode(' ',strip_tags($summary)));
echo "Total words in summary: $words <br><hr>";
/*

PHP explode() Function
Definition and Usage
The explode() function breaks a string into an array.

Note: The "separator" parameter cannot be an empty string.

Note: This function is binary-safe.
*/

$str = "Hello World. It's a beautiful day.";
print_r(explode(" ", $str));
//echo $str;
?>