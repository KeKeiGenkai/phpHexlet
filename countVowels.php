<?php

namespace App\Solution;

// BEGIN (write your solution here)
function countVowels($text)
{
    $num = 0;
    $length = mb_strlen($text);
    for ($i = 0; $i < $length; $i++) {
        if (\App\Symbols\isVowel($text[$i])) {
            $num++;
        }
    }
    return $num;
}
// END
