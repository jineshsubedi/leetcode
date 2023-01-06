<?php

function minimumRounds($tasks) {
    $freq = array_count_values($tasks);
    $ans = 0;
    foreach($freq as $f)
    {
        if($f == 1) return -1;
        else if(($f % 3) == 0)
        {
            $ans = $ans + (int)($f/3); 
        }else if(($f % 3) == 1 ||( $f % 3) == 2){
            $ans = $ans + (int)($f / 3) + 1;
        }
    }
    return $ans;
}

echo minimumRounds([2,2,2,2,2,2,2]); // 3
echo minimumRounds([2,2,3,3,2,4,4,4,4,4]); // 4
echo minimumRounds([2,3,3]); // -1

?>