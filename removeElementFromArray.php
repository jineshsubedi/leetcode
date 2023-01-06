<?php 

function removeElement($nums, $val) {
	$next = $nums;
    for($i=0;$i<count($next);$i++)
    {
    	echo $i. '-> num ='.$next[$i].' & val ='. $val. '<br>';
        if($next[$i] == $val)
        {
            unset($nums[$i]);
        }
    }
    var_dump($nums);
}
echo removeElement([3,2,2,3], 3);
?>