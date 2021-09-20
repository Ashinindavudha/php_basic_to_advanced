<?php
require_once('7_Recursive_Functions.php');
// A Payment Schedule Calculator Using Recursion
//loan balance
$balance = 10000.00;
//loan interest rate;
$interesRate = .0575;
//monthly interest rate
$monthlyInterest = $interesRate / 12;
//term length of the loan, in years.
$termLength = 5;
//number of payments per year
$paymentPerYear = 12;
//payment iteration
$paymentNumber = 1;
//determine total number payments
$totalPayments = $termLength * $paymentPerYear;
//determine interest component of periodic payment
$intCalc = 1 + $interesRate / $paymentPerYear;
//determine periodic payment
$periodicPayment = $balance * pow($intCalc,$totalPayments) * ($intCalc - 1) / (pow($intCalc, $totalPayments) - 1);
//round periodic payment to two decimals
$periodicPayment = round($periodicPayment, 2);
$rows = amortizationTable($paymentNumber, $periodicPayment, $balance, 
$monthlyInterest);
//Create table
echo "<table>";
echo "<tr>
<th>Payment Number</th><th>Balance</th><th>Payment</th><th>Principal</th><th>Interest</th>
</tr>";
foreach($rows as $row) {
 printf("<tr><td>%d</td>", $row[0]);
 printf("<td>$%s</td>", $row[1]);
 printf("<td>$%s</td>", $row[2]);
 printf("<td>$%s</td>", $row[3]);
 //printf("<td>$%s</td></tr>", $row[4]);
 }
 // Close table
 echo "</table>";
