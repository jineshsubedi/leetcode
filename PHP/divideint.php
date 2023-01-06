<?php 

function divide($dividend, $divisor):int {
	$d = $dividend / $divisor;
	$d = (int)$d;
	echo $d;
	return $d;
}

divide(-2147483648, -1)
?>	