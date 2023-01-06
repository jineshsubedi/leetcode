<?php

function threeSum($nums) {
    sort($nums);
    $length = count($nums);
    $triplets = [];
    for ($i = 0; $i < $length; $i++) {
        if ($nums[$i] === $nums[$i - 1]) continue;

        $j = $i + 1;
        $k = $length - 1;
        while ($j < $k) {
            $sum = $nums[$i] + $nums[$j] + $nums[$k];
            if ($sum < 0) {
                $j++;
            } elseif ($sum > 0) {
                $k--;
            } else {
                $triplets[] = [$nums[$i], $nums[$j], $nums[$k]];
                $j++;
                $k--;
                while ($nums[$j] === $nums[$j - 1]) $j++;
                while ($nums[$k] === $nums[$k + 1]) $k--;
            }
        }
    }

    return $triplets;
}
// echo threeSum([-1,0,1,2,-1,-4]); // expected [[-1,-1,2],[-1,0,1]]
// echo threeSum([0,1,1]); // expected []
echo threeSum([0,0,0]); //	expected [[0,0,0]]
?>