<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public $ans = [];
    function permuteUnique($nums) {
        $this->help(0, $nums);
        return $this->ans;
    }
    public function help($pos, &$nums) {
        if ($pos > count($nums)) {
            return;
        }
        
        if ($pos == count($nums) - 1) {
            $found = false;
            for ($i = 0; $i < count($this->ans); $i++) {
                if ($this->ans[$i] == $nums) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $this->ans[] = $nums;
            }
            return;
        }
        
        for ($i = $pos; $i < count($nums); $i++) {
            list($nums[$i], $nums[$pos]) = array($nums[$pos], $nums[$i]);
            $this->help($pos + 1, $nums);
            list($nums[$i], $nums[$pos]) = array($nums[$pos], $nums[$i]);
        }
    }
}

?>

<?php 

class Solution {
    private $originSet;
    private $sets = [];
    
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permuteUnique($nums) {
        $this->originSet = $nums;
        $map = [];
        foreach ($nums as $num) {
            $map[$num] = isset($map[$num]) ? $map[$num] + 1 : 1;
        }

        $this->backtracking([], $map);
        return $this->sets;
    }

    function backtracking(array $set, array $map) {
        if (count($set) === count($this->originSet)) {
            $this->sets[] = $set;
            return;
        }

        foreach ($map as $value => $count) {
            if ($count > 0) {
                array_push($set, $value);
                $map[$value]--;
                $this->backtracking($set, $map);
                array_pop($set);
                $map[$value]++;
            }
        }
    }
}

?>