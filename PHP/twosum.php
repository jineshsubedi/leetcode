<?php 

function twoSum($nums, $target) {
	$loop2 = count($nums);
	$loop1 = $loop2 - 1;
	$result = [];
	for($i=0;$i<$loop1;$i++)
	{
		for($j=1;$j<$loop2;$j++)
		{
			$sum = $nums[$i] + $nums[$j];
			if($sum === $target)
			{
				if($i != $j)
				{
					$result = [$i, $j];
					break;
				}
			}
		}
	}  
	return $result;
}
$nums = [2,7,11,15];
$target = 9;
twoSum($nums, $target)
?>