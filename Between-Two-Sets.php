<?php

function getTotalX(array $a, array $b): int
{
    /** @var int $lcm */
    $lcm = calcForArray($a, 'lcm');
    /** @var int $gcd */
    $gcd = calcForArray($b, 'gcd');
    $count = 0;
    for ($i = $lcm, $j = 2; $i <= $gcd; $i = $lcm * $j, $j++) {
        if ($gcd % $i == 0) {
            ++$count;
        }
    }
    return $count;
}

function gcd(int $a, int $b): int
{
    if ($b == 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}

function lcm(int $a, int $b): int
{
    return $a * ($b / gcd($a, $b));
}

function calcForArray(array $arr, string $name): int
{
    $result = $arr[0];
    for ($i = 1, $count = count($arr); $i < $count; $i++) {
        $result = $name($result, $arr[$i]);
    }
    return $result;
}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

fscanf($__fp, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($__fp, "%[^\n]", $b_temp);

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($a, $b);

fwrite($fptr, $total . "\n");

fclose($__fp);
fclose($fptr);
