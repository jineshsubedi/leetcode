<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function nextPermutation(&$nums) {
       	$length = count($nums);
        $i = $length - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i+1]) {
            $i--;
        }
        if ($i >= 0) {
            $j = $i + 1;
            while ($j < $length && $nums[$j] > $nums[$i]) {
                $j++;
            }
            [$nums[$i], $nums[$j-1]] = [$nums[$j-1], $nums[$i]];
        }
        // reverse
        $k = $i + 1;
        $p = $length - 1;
        while ($k < $p) {
            [$nums[$k++], $nums[$p--]] = [$nums[$p], $nums[$k]];
        } 
    }
}

?>