<?php

$handle = fopen ("php://stdin", "r");
function simpleArraySum($n, $ar) {
    // Complete this function
    $array = $ar;
    foreach ($array as $value)
    {
        $total += $value;
    }
    return $total;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = simpleArraySum($n, $ar);
echo $result . "\n";

?>
