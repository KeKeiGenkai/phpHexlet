<?php

namespace App\Solution;

// BEGIN (write your solution here)
function  joinNumbersFromRange($firstNumber, $lastNumber) {
    $fin = "";
    $i = $firstNumber;
    while ($i <= $lastNumber) {
        $fin .= $i;
        $i++;
    }
    return $fin;
}

print_r(joinNumbersFromRange(2, 2));
// END
