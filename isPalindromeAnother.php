<?php

// phpcs:disable PSR1.Files.SideEffects
// BEGIN (write your solution here)
require_once 'Strings.php';
function isPalindrome($word)
{
    $rev = reverse($word);
    if ($rev === $word) {
        return true;
    } else {
        return false;
    }
}
// END
