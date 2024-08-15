<?php

namespace App\Solution;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $fin = '';
    $length = mb_strlen($text);

    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($text, $i, 1);
        if (mb_strtoupper($char) === $char) {
            $fin .= mb_strtolower($char);
        } else {
            $fin .= mb_strtoupper($char);
        }
    }

    return $fin;
    // END
}
print_r(invertCase("ЧеЧеЧеЧ!!!"));