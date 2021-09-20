<?php
// Default Argument Values
function calculateSalesTax($price, $tax=.0645)
{
    $total = $price + ($price * $tax);
    echo "Total cost : $total";
}
$price = 15.57;
calculateSalesTax($price);
echo "<br>";

function CalculateSaleTax($price, $tax=0)
{
    $total = $price + ($price * $tax);
    echo "Total cost: $total";
}
CalculateSaleTax(42.3568);

echo "<br>";

function CaculatePrice($price, $price2 = 0, $price3 = 0)
{
    echo "Total Price: ".$price + $price2 + $price3;
}
CaculatePrice(10, 3);