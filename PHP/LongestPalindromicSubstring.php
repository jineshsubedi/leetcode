<?php

function longestPalindrome($s) {
	$n = strlen($s);
	if($n <= 1) 
		return $s;
	if(strrev($s) == $s)
		return $s;
	$maxLength = 1;
	for($i=0;$i<$n;$i++)
	{
		for($j=$maxLength; $j <= $n; $j++)
		{
			$start = $i - ($j >> 1);
			if($start < 0 || $start + $j > $n)
				break;
			$substr = substr($s, $start, $j);
			if ($substr === strrev($substr)) {
				$str = $substr;
				$maxLength = $j;
			} else if ($maxLength + 1 < $j) {
				break;
			}
		}
	}
	return $str;
}	

echo longestPalindrome('catae');

?>