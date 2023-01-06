<?php 
    $nums = [0,0,1,1,1,2,2,3,3,4];
    $temp = '';
    $ccount = count($nums);
    for($i=0;$i<$ccount;$i++)
    {
        if($temp != $nums[$i])
        {
            $temp = $nums[$i];
        }else{
            echo $nums[$i].' unset <br>';
            unset($nums[$i]);

        }
    }
    echo count($nums);
?>