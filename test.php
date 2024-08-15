<?php

function sum($numbers)
{
    $result = 0;
    for ($i = 0; $i < strlen($numbers); $i += 1) {
        $result += (int) $numbers [$i];
    }
    return $result;
}

sum("12345"); // 15