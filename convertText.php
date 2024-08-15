<?php

namespace App\Solution;

// BEGIN (write your solution here)
function convertText($strin) {
    $frstChr = substr($strin, 0, 1);
    //var_dump(ctype_upper($frstChr));
    if (ctype_upper($frstChr) == true) {
        return $strin;
    } else {
        return strrev($strin);
    }
}
print_r(convertText("Iamgay"));
print_r(convertText("yapidaras"));
// END
