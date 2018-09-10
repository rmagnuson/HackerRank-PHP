<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    sort($arr);
    $total = array_sum($arr);
    $newsum = [];    
    for ($i=0; $i < count($arr); $i++) {
        $newsum[] = $total-$arr[$i];
    }
    $min = min($newsum);
    $max = max($newsum);
    
//    $lowarr = array($arr[0],$arr[1],$arr[2],$arr[3]);
//    $higharr = array($arr[1],$arr[2],$arr[3],$arr[4]);
    
//    $min = array_sum($lowarr);
//    $max = array_sum($higharr);
    
    echo $min.' '.$max;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
?>
