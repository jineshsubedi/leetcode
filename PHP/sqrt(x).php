<?php 

function mySqrt($x) {
	// return (int)$x**(1/2);
	$low = 1;
	$high = $x;
	while($low < $high)
	{
		$high = (int)($low + $high) / 2;
		$low = (int)$x / $high;
	}
	return (int)$high;
}

echo mySqrt(7). '<br>';
echo mySqrt(8). '<br>';
echo mySqrt(16). '<br>';
echo mySqrt(36). '<br>';
echo mySqrt(64). '<br>';

?>