<?php

/*
 * Complete the pageCount function below.
 */
function pageCount($n, $p) {
    return min(intval($p / 2), intval($n / 2) - intval($p / 2));
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $p);

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
