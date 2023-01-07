<?php

function searchInsert($nums, $target) {
    $left = 0;
    $right = count($nums);
    if($nums[0] > $target) return 0;
    if($nums[count($nums) - 1] < $target) return count($nums);
    while($left <= $right)
    {
        $mid = (int)(($left + $right) / 2);
        if($nums[$mid] == $target) return $mid;
        if($nums[$mid] > $target)
        {
            $right = $mid - 1;
        }else{
            $left = $mid + 1;
        }
    }
    return $left;
}

echo searchInsert([1,3,5,6], 5); // 2
echo searchInsert([1,3,5,6], 2); // 1
echo searchInsert([1,3,5,6], 7); // 4
echo searchInsert([1,3,5,6, 7,8,9,10,12,14,16,17,20,22,25,36,50,55,66,78], 17); // 11

?>