<?php
$state[0] = "Delaware";
$state[1] = "Pennsylvania";
$state[2] = "New Jersey";
$state[4] = "Hawaii";
print_r($state). "<hr><br>";
echo "<hr><br>";
foreach ($state as $key => $value) {
    echo $value . "<hr><br>";
}


$states["Delaware"] = "December 7, 1787";
$states["Pennsylvania"] = "December 12, 1787";
$states["New Jersey"] = "December 18, 1787";
$states["Hawaii"] = "August 21, 1959";

foreach($states as $sta){
    echo $sta . "<hr><br>";
}

