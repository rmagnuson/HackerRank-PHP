<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
    $charged = (array_sum($bill) - $bill[$k]) / 2;
    print($charged == $b ? 'Bon Appetit' : $b - $charged);
}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);
