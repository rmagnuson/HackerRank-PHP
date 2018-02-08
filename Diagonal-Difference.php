<?php

$handle = fopen ("php://stdin", "r");
function diagonalDifference($a) {
    $arrDiag = count($a);

    $firstD = 0;
    $secondD = 0;

    $i = 0;
    for($j = 0; $j < $arrDiag; $j++){
        $i++;
        $firstD += $a[$j][$j];
        $secondD += $a[$arrDiag - $i][$j];
    }
  return abs($firstD-$secondD);
}

fscanf($handle, "%i",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
   $a[$a_i] = array_map('intval', $a[$a_i]);
}
$result = diagonalDifference($a);
echo $result . "\n";

?>
