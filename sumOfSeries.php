<?php

namespace App\Solution;

// BEGIN (write your solution here)
function sumOfSeries($first, $last)
{
    $prog = 0;
    if ($first === $last){
        return $first;
    } else {
        for ($i = $first; $i <= $last; $i++) {
            $prog = $prog + $i;
        }
        return $prog;
    }
}
print_r(sumOfSeries(2, 6));
// END
