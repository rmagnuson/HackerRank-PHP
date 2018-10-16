<?php

function gradingStudents($grades) {
  // fail if below 40
  // n, no more than 60
  // grade, no more than 100
  for ($i = 0; $i < count($grades); $i++) {
    if ($grades[$i] >= 38) { 
      $m = $grades[$i] % 5;
      if ($m == 3) {
        $grades[$i] += 2;
      } 
      if ($m == 4) {
        $grades[$i] += 1;
      }
    } 
  }
  return $grades;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%d\n", $n);

$grades = array();

for ($grades_itr = 0; $grades_itr < $n; $grades_itr++) {
    fscanf($__fp, "%d\n", $grades_item);
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($__fp);
fclose($fptr);
