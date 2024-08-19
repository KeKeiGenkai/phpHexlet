<?php

// phpcs:disable PSR1.Files.SideEffects

namespace Solution;

require_once "Strings.php";
// BEGIN (write your solution here)
function isPalindrome($word)
{
    return $word === \Strings\reverse($word);
}
// END
