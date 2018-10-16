<?php

function migratoryBirds($arr) {
    $arrCount = [
        1 => countInArray($arr, 1),
        2 => countInArray($arr, 2),
        3 => countInArray($arr, 3),
        4 => countInArray($arr, 4),
        5 => countInArray($arr, 5),
    ];
    return arrayKeyByValue($arrCount, max($arrCount));
}

function countInArray($arr, $find): int
{
    $count = 0;
    foreach ($arr as $item) {
        if ($item == $find) {
            ++$count;
        }
    }
    return $count;
}

function arrayKeyByValue($arr, $find): int
{
    foreach ($arr as $key => $value) {
        if ($value == $find) {
            return $key;
        }
    }
    return null;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
