<?php

namespace App\Solution;

// BEGIN (write your solution here)
$str = "Sansa Stark";
function isArgumentsForSubstrCorrect($str, $startIndex, $length)
{
    $strLength = strlen($str);
    if (($length < 0) || ($startIndex < 0) || ($startIndex >= $strLength) || ($startIndex + $length > $strLength))
    {
        return false;
    } else {
        return true;
    }
}
print_r(isArgumentsForSubstrCorrect($str, 11, 1));
// END
