<?php
$fh = fopen("home/www/data/username-or-email.csv", "r");
while (list($name, $emai, $phone) = fgetcsv($fh, 1024, ",")) {
    echo "<p>$name ($emai) Tel. $phone</p>";
    
}