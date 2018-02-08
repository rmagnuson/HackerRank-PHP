<?php

$handle = fopen ("php://stdin", "r");
function aVeryBigSum($n, $ar) {
    // Complete this function
    $sol = array_sum($ar);
    return $sol;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = aVeryBigSum($n, $ar);
echo $result . "\n";

?>