<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $count = $seaLevel = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($s[$i] === 'U') {
            ++$seaLevel;
            if ($seaLevel === 0) {
                ++$count;
            }
        } else {
            --$seaLevel;
        }
    }
    return $count;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
