<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $ans = array();
        $tmp = array();
        $vis = array_fill(0, count($nums), 0);
        $this->helper($nums, $ans, $tmp, $vis);
        return $ans;
    }
    function helper(array $nums, array &$ans, array &$tmp, array &$vis) {
        if (count($tmp) == count($nums)) {
            array_push($ans, $tmp);
            return;
        }

        for ($i = 0; $i < count($nums); $i++) {
            if ($vis[$i] == true) continue;
            $vis[$i] = 1;
            array_push($tmp, $nums[$i]);
            $this->helper($nums, $ans, $tmp, $vis);
            array_pop($tmp);
            $vis[$i] = 0;
        }
    }
}
?>