<?php

// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year) {
    if ($year == 1918) {
        return "26.09.{$year}";
    }
    return ($year < 1918 && $year % 4 == 0)
    || ($year > 1918 && (($year % 400 == 0) || ($year % 100 !== 0 && $year % 4 == 0)))
        ? "12.09.{$year}" : "13.09.{$year}";

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);
