<?php
$carBrands = [12=> "Rolls Royce", "Bentley", "Porch"];
$germanCars = [20 => "Audi", 22 => "Porche", 25 => "VW"];
//print_r ($carBrands ."<br>");
//var_dump ($germanCars ."<br>");
foreach($carBrands as $car) {
    echo $car . "<hr><br>";
}
foreach($germanCars as $key => $value)
{
    echo $value . "<hr><br>";
}

$states = ["OH" => "Ohio", "PA" => "Pennsylvania", "NY" => "New York"];
print_r($states);
echo "<hr><br>";
foreach($states as $key => $sta) {
    echo $sta . "<hr><br>";
}
$stated = [
 "Ohio" => array("population" => "11,353,140", "capital" => "Columbus"),
 "Nebraska" => array("population" => "1,711,263", "capital" => "Omaha")
];
print_r($stated);
echo "<hr><br>";
print_r($stated["Ohio"]);
echo "<hr><br>";
print_r($stated["Ohio"]["population"]);
echo "<hr><br>";
foreach($stated as $st){
    print_r($st) . "<hr><br>";
}