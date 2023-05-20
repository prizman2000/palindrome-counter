<?php

declare(strict_types=1);

namespace VyacheslavLebedev\PalindromeCounter;

class PalindromeCounter
{
    public function is_palindrome(string $string): bool
    {
        $string = strtolower($string);
        $i = 0;
        $j = strlen($string) - 1;

        while ($i <= strlen($string) / 2) {
            if ($string[$i++] != $string[$j--])
                return false;
        }
        return true;
    }
}
