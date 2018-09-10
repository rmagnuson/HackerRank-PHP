<?php

function timeConversion($s) {

    $time= explode(":", $s);
    $pos = strpos(end($time), 'PM');

    $h;
    $m;
    $sec;

    if ($pos === false) {
        $h= ($time[0] == 12) ? '00' : $time[0];
        $m= $time[1];
        $t= intval(end($time));
        $sec= ($t<10) ? "0$t": $t;
    }
    else
    {
        $h= ($time[0] == 12) ? 12 : 12+$time[0];
        $m= $time[1];
        $t= intval(end($time));
        $sec= ($t<10) ? "0$t": $t;
}
return $h.':'.$m.':'.$sec;    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
