<?php

namespace App\Solution;

// BEGIN (write your solution here)
function calculate($do, $firstNum, $lastNum)
{
    switch ($do) {
        case "*":
            return $firstNum * $lastNum;
        case "/":
            return $firstNum / $lastNum;
        case "+":
            return $firstNum + $lastNum;
        case "-":
            return $firstNum - $lastNum;
        default:
            return null;
    }
}
print_r(calculate('+', 3, 10)); // 13
print_r(calculate('-', -8, 6)); // -14
print_r(calculate('$', 0, 9));  // null
// END
