<?php

// Complete the countApplesAndOranges function below.
  
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
  printf("%d\r\n%d", countFruits($apples, $a, $s, $t), countFruits($oranges, $b, $s, $t));
}

function countFruits(array $fruits, int $a, int $s, int $t): int
{
  return count(array_filter($fruits, function ($f) use ($a, $s, $t) {
    return $a + $f >= $s and $a + $f <= $t;
  }));
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $st_temp);
$st = explode(' ', $st_temp);

$s = intval($st[0]);

$t = intval($st[1]);

fscanf($stdin, "%[^\n]", $ab_temp);
$ab = explode(' ', $ab_temp);

$a = intval($ab[0]);

$b = intval($ab[1]);

fscanf($stdin, "%[^\n]", $mn_temp);
$mn = explode(' ', $mn_temp);

$m = intval($mn[0]);

$n = intval($mn[1]);

fscanf($stdin, "%[^\n]", $apples_temp);

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%[^\n]", $oranges_temp);

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);

fclose($stdin);
