<?php

namespace App\Solution;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    $i = $firstNumber;
    while (1 <= $i) {
        print_r($i);
        print_r("\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END
}
printNumbers('15');
