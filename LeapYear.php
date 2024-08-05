<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isLeapYear($year)
{
    return ($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0);
}
print_r(isLeapYear(2024));
// END
