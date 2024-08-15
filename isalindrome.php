<?php

namespace App\Text;

// BEGIN (write your solution here)
function isPalindrome($word)
{
    $length = mb_strlen($word, 'UTF-8');
    for ($i = 0; $i < $length / 2; $i++) {
        if (mb_substr($word, $i, 1, 'UTF-8') !== mb_substr($word, $length - $i - 1, 1, 'UTF-8')) {
            return false;
        }
    }
    return true;
}
// END
print_r(isPalindrome("penep"));