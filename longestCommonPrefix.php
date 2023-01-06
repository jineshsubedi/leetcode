<?php 

function longestCommonPrefix($strs) {
    $checker = $strs[0];
    foreach($strs as $str)
    {
        $prefix = '';
        if(!empty($checker))
        {
            $minLength = strlen($str) > strlen($checker) ? strlen($checker) : strlen($str);
            for($i=0;$i<$minLength;$i++)
            {
                if($str[$i] == $checker[$i])
                {
                    $prefix .= $str[$i];
                }else{
                    break;
                }
            } 
            $checker = $prefix;
        }
    }
    return $checker;
}

// $strs = ["flower","flow","flight","flask"];
// $strs = ["dog","racecar","car"];
$strs = ['apple'];

// $strs = ["dcognate","dcamparable","dconnate"];
echo longestCommonPrefix($strs);
?>