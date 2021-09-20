<?php

// Recursive Functions
function amortizationTable($paymentNumber, $periodicPayment, $balance, $monthlyInterest)
{
    static $table = array();
    //Calculate payment interest
    $paymentInterest = round($balance * $monthlyInterest, 2);
    //Calculate payment principal
    $paymentPrincipal = round( $periodicPayment - $paymentInterest, 2);
    //Deduct principal form remaining balance
    $newBalance = round($balance - $paymentPrincipal, 2);
    // if new balance < monthly payment, set to zero
    if ($newBalance < $paymentPrincipal) {
        $newBalance = 0;
    }
    $table[] = [
        number_format($newBalance, 2),
        number_format($periodicPayment, 2),
        number_format($paymentPrincipal, 2),
        number_format($paymentInterest, 2)
    ];

    // if balnce not yet zero, recursively call amortizationTable()
    if ($newBalance > 0) {
        $paymentNumber++;
        amortizationTable($paymentNumber, $periodicPayment, $newBalance, $monthlyInterest);

    }
    return $table;
}

