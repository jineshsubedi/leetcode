<?php

function maxProfit($prices) {
    if ($prices === null) return;
    if (count($prices) <= 1) return 0;
    
    $days = count($prices);
    $max = 0;
    $min = PHP_INT_MAX;
    for ($i = 0; $i < $days; $i++) {
        if ($prices[$i] < $min) {
            $min = $prices[$i];
        } else {
            $max = max($max, $prices[$i] - $min);
        }            
    }
    return $max;
}	

echo ' result='.maxProfit([7,1,5,3,6,4]).'expected = 5 <br>';
echo ' result='.maxProfit([7,6,4,3,1]).'expected = 0 <br>';
echo ' result='.maxProfit([2,4,1]).'expected = 2<br>';
echo ' result='.maxProfit([2,1,2,1,0,1,2]).'expected = 2<br>';
echo ' result='.maxProfit([3,2,6,5,0,3]).'expected = 4 <br>';
?>