<?php

function merge($nums1, $m, $nums2, $n) {
    $num1 = array_splice($nums1, 0, $m);
    $num2 = array_splice($nums2, 0, $n);
    $num1 = array_merge($num1, $num2);
    sort($num1);
    var_dump($num1);
    
}
echo merge([1,2,3,0,0,0], 3, [2,5,6], 3); //expected [1,2,2,3,5,6]
echo merge([], 0, [], 0).'<br>'; //expected [1]
echo merge([1], 1, [], 0).'<br>'; //expected [1]
echo merge([0], 0, [1], 1).'<br>'; //expected [1,2,2,3,5,6] 
?>