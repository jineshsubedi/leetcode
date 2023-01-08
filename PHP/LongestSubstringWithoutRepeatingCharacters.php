<?php

function lengthOfLongestSubstring($s) {
    $leftPointer=0;
    $ansArr=[];
    $max=0;
    // sliding window technique
    for($i=0;$i<strlen($s);$i++)
    {  
        if(isset($ansArr[$s[$i]]) && $leftPointer<($ansArr[$s[$i]]+1)){ 
            $leftPointer=$ansArr[$s[$i]]+1;
        }
        $ansArr[$s[$i]]=$i;
        $max = max($max, $i - $leftPointer+1);
    }
    return $max;
}

echo lengthOfLongestSubstring("abcabcbb"); // 3
echo lengthOfLongestSubstring("bbbbb"); // 1
echo lengthOfLongestSubstring("pwwkew"); // 3

?>