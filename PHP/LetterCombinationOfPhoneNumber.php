<?php


function letterCombinations($digits) {
    $phoneData = [
        2 => ['a','b','c'],
        3 => ['d','e','f'],
        4 => ['g','h','i'],
        5 => ['j','k','l'],
        6 => ['m','n','o'],
        7 => ['p','q','r', 's'],
        8 => ['t','u','v'],
        9 => ['w','x','y', 'z'],
    ];
    $n = strlen($digits);
    if($n == 0) return [];
    if($n == 1) return $phoneData[$digits];
    $nums = str_split($digits);
    $res = $phoneData[$nums[0]];
    for($i=1;$i<$n;$i++)
    {
        $temp = [];
        foreach($phoneData[$nums[$i]] as $char)
        {
            foreach($res as $r)
            {
                $temp[] = $r.$char;
            }
        }
        $res = $temp;
    }
    return $res;
}


var_dump(letterCombinations(223));
?>

