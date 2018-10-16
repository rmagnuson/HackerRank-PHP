<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $min = $max = $scores[0];
    $sumHigh = $sumLow = 0;
    for($i = 1, $len = count($scores); $i < $len; $i++) {
        if ($scores[$i] > $max) {
            $max = $scores[$i];
            ++$sumHigh;
        }
        if ($scores[$i] < $min) {
            $min = $scores[$i];
            ++$sumLow;
        }
    }
    return [$sumHigh, $sumLow];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);
