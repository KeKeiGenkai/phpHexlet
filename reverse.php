<?php

namespace App\Number;

function reverse(int $num): int
{
    if ($num >= 0) {
        return strrev($num);
    } else {
        return "-" . substr(strrev($num), 0, -1);
    }
}
print_r(reverse(-228));