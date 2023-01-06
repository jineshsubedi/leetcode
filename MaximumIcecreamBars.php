<?php

function maxIceCream($costs, $coins) {
	sort($costs);
	$sum = 0;
	$counter = 0;
	for($i=0;$i<count($costs);$i++)
	{
		if($costs[$i] > $coins)
			continue;
		$temp = $sum + $costs[$i];
		if($temp <= $coins){
			$sum = $temp;
			$counter++;
		}
	}    
	return $counter;
}


echo maxIceCream([1,3,2,4,1], 7); // expected 4
echo maxIceCream([10,6,8,7,7,8], 5); // expected 0
echo maxIceCream([1,6,3,1,2,5], 20); // expected 6
echo maxIceCream([27,23,33,26,46,86,70,85,89,82,57,66,42,18,18,5,46,56,42,82,52,78,4,27,96,74,74,52,2,24,78,18,42,10,12,10,80,30,60,38,32,7,98,26,18,62,50,42,15,14,32,86,93,98,47,46,58,42,74,69,51,53,58,40,66,46,65,2,10,82,94,26,6,78,2,101,97,16,12,18,71,5,46,22,58,12,18,62,61,51,2,18,34,12,36,58,20,12,17,70], 241); // expected 24



?>