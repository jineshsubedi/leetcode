<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $i = 0;
        $sign = 1;
        $ans = 0;
        while (ctype_space($s[$i])) {
            $i++;
        }
        if ($s[$i] == '-') {
            $sign = -1 * $sign;
            $i++;
        } else if ($s[$i] == '+') {
            $i++;
        }
        for ($j = $i; $j < strlen($s); $j++) {
            if ($s[$j] >= '0' && $s[$j] <= '9') {
                $ans = ($ans * 10) + ($s[$j] - '0');
                if ($ans >= PHP_INT_MAX) break;
            } else break;
        }
        $ans = $ans * $sign;
        if($ans < -1 * pow(2,31))
            return $sign * pow(2,31);
        if($ans > pow(2,31) - 1)
            return pow(2,31) - 1;

        return $ans;
    }
}

?>