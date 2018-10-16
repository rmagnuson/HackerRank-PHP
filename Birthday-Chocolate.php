<?php

// Complete the birthday function below.
function birthday($s, $d, $m) {
    for ($i = 0, $len = count($s), $result = 0; $i < $len; $i++) {
        $arr = array_slice($s, $i, $m);
        if (count($arr) == $m && array_sum($arr) == $d) {
            ++$result;
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$dm = explode(' ', rtrim(fgets(STDIN)));

$d = intval($dm[0]);

$m = intval($dm[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
