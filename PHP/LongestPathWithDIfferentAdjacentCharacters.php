<?php

class Solution {

    /**
     * @param Integer[] $parent
     * @param String $s
     * @return Integer
     */
    private $child = array();
    private $ans;

    function longestPath($parent, $s) {
       $n = count($parent);
        for ($i = 1; $i < $n; $i++) {
            $this->child[$parent[$i]][] = $i;
        }
        $this->ans = 1;
        $this->LongestPaths($s, 0);
        return $this->ans; 
    }
    private function LongestPaths($s, $curr_node) {
        if (empty($this->child[$curr_node])) return 1;
        $mx1 = 0;
        $mx2 = 0;
        foreach ($this->child[$curr_node] as $child_node) {
            $len = $this->LongestPaths($s, $child_node);
            $this->ans = max($this->ans, $len);
            if ($s[$curr_node] == $s[$child_node]) continue;
            if ($len > $mx1) {
                $mx2 = $mx1;
                $mx1 = $len;
            } else {
                $mx2 = max($mx2, $len);
            }
        }
        $this->ans = max($this->ans, 1 + $mx1 + $mx2);
        return 1 + $mx1;
    }
}

?>