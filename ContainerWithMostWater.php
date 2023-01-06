<?php

function maxArea($height)
{
	$maxArea = 0;
    $left = 0;
    $right = count($height) - 1;

    while($left < $right)
    {
        $shortLine = min($height[$left], $height[$right]);
        $maxArea = max($maxArea, $shortLine * ($right - $left));

        if($height[$left] < $height[$right])
        {
            $left++;
        }else{
            $right--;
        }
    }
    return $maxArea;
}
echo maxArea([1,1]); // 1
echo maxArea([1,8,6,2,5,4,8,3,7]); // 49
?>