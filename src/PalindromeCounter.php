<?php

declare(strict_types=1);

namespace VyacheslavLebedev\PalindromeCounter;

class PalindromeCounter
{
    private function is_palindrome(string $string): bool
    {
        $string = preg_replace('/[^a-zA-Z]/', '', $string);
        $string = strtolower($string);
        $i = 0;
        $j = strlen($string) - 1;

        while ($i <= strlen($string) / 2) {
            if ($string[$i++] != $string[$j--])
                return false;
        }
        return true;
    }

    public function count(array $inputArray): int
    {
        $res = 0;
        foreach ($inputArray as $string) {
            if ($this->is_palindrome($string)) {
                $res++;
            }
        }
        return $res;
    }
}
