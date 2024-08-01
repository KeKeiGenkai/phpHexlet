<?php

namespace App\Solution;

// BEGIN (write your solution here)
function getFormattedBirthday($day, $mount, $year)
{
    return sprintf('%02d', $day) . '-' . sprintf('%02d', $mount) . '-' . sprintf('%04d', $year);
}
// END
