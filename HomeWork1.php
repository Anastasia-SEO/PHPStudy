<?php

/// TASK_1
$x = true;
if ($x == 1) {
    echo 1;
}
if ($x == 2) {
    echo 2;
}
if ($x == 3) {
   echo 3;
}

/// TASK_2

echo $number = ($number = 0 ? : ($number < 0 ? : ($number = 1 ? : ($number = 2 ? : ($number % 2 === 0 ? "Number {$number} is even" : "Number {$number} is odd")))));

?>