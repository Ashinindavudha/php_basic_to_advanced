<?php
function calcSalesTax($price, $tax=45) 
{
    $total = $price + ($price * $tax);
    echo "Total cost: $total";
}

calcSalesTax(42.00);