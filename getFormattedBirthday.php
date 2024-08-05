<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isLeapYear($year)
{
    $res = ($year % 400 == 0) && ($year % 4 == 0 && $year % 100 == 0);
    //return ($length >= 8 && $length <= 20) && hasSpecialChars($password);
    print_r($res);
}
isLeapYear(2035);
// END
