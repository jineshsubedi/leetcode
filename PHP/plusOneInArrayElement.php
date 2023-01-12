<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $n = count($digits);
        if($n == 0) return [1];
        $c = 0;
        $result = [];
        for($i=$n-1;$i>=0;$i--)
        {
            if($i == $n - 1)
                $sum = $digits[$i] + 1 + $c;
            else
                $sum = $digits[$i] + $c;
            if($sum > 9)
            {
                $c = 1;
                $sum = (int) ($sum % 10);
            }else{
                $c = 0;
            }
            $result[] = $sum;
        }
        if($c == 1) $result[] = $c;
        return array_reverse($result);
    }
    
}

?>