<?php

function addBinary($a, $b) {
	$a = array_reverse(str_split($a));
	foreach(array_reverse(str_split($b)) as $k=>$v)
	{
		$a[$k] = ($a[$k] ?? 0 ) + $v;
	}     
	foreach($a as $k => $v)
	{
		if($a[$k] > 1)
		{
			$a[$k] = $a[$k] - 2;
			$a[$k+1] = ($a[$k+1] ?? 0 ) + 1;
		}
	}
	return implode(array_reverse($a));
}

echo addBinary(11, 1); //100
echo addBinary(1010, 1011); //10101

?>