<?php

function calPoints($operations) {
    $s = [];
    foreach($operations as $op){
        if($op=='C') 
            array_pop($s);
        else if($op=='D')
            array_push($s,end($s)*2);
        else if($op=="+")
            array_push($s,(end($s)+$s[count($s)-2]));
        else
            array_push($s,$op);
    }
    
    return array_sum($s);
    
}

echo calPoints(["5","2","C","D","+"]); //30

?>