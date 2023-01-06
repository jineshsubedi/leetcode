<?php

function merge($nums1, $m, $nums2, $n) {
    if($m == 0 && $n == 0) return [];
    if($m == 0 && $n != 0) return $nums2;
    if($m != 0 && $n == 0) return $nums1;
    $num1 = array_chunk($nums1, $m);
    $num2 = array_chunk($nums2, $n);
    $myarr = array_merge($num1[0], $num2[0]);
    sort($myarr);
    var_dump($myarr);
    
}
echo merge([1,2,3,0,0,0], 3, [2,5,6], 3); //expected [1,2,2,3,5,6]
?>