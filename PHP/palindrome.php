<?php 

function isPalindrome($x) {
	$z = $x;
	$y = '';
	while($z > 0)
	{
		$y .= $z % 10;
		echo $y.' - ';
		$z = $z / 10;
		$z = (int)$z;
		echo $z.'<br>';
	}
	if((int)$y === $x)
	{
		echo 'true';
	}else{
		echo 'false';
	}
}
$x = 120211;
isPalindrome($x);	

?>