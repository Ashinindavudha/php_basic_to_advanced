<?php
$fh = fopen("home/www/data/user_data.csv", "r");
while (list($name, $emai, $phone) = fgetcsv($fh, 1024, ",")) {
    echo "<p>$name ($emai) Tel. $phone</p>";
    
}