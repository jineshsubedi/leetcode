<?php


function climbStairs($n) {
    $prev2 = 0;
    $prev = 1;
    for($i=0;$i<$n;$i++)
    {
    	$curr = $prev2 + $prev;
    	$prev2 = $prev;
    	$prev = $curr;
    }    
    return $prev;
}

echo climbStairs(2); // 2
echo climbStairs(3); // 3
echo climbStairs(5); // 3

?>