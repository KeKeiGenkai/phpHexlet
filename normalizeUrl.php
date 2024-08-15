<?php

namespace App\Solution;

// BEGIN (write your solution here)
function normalizeUrl($linka)
{
    $haystack = "https://";
    $cath = "http://";
    if (strpos($linka, $haystack) === 0) {
        return $linka;
        }
    elseif(strpos($linka, $cath) === 0) {
        $new_string = "https" . substr($linka, 4, strlen($linka));
        return $new_string;
    }
    else {
        return "https://" . $linka;
    }
}
print_r(normalizeUrl("pornhub.com"));
print_r(normalizeUrl("http://gosuslugi/altushka.ru"));
print_r(normalizeUrl("https://github.com"));
// END
