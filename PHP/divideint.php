<?php 

function divide($dividend, $divisor):int {
	if ($dividend == PHP_INT_MIN && $divisor == -1) {
        return PHP_INT_MAX;
    }
    $dvd = abs($dividend);
    $dvs = abs($divisor);
    $ans = 0;
    $sign = ($dividend > 0) ^ ($divisor > 0) ? -1 : 1;
    while ($dvd >= $dvs) {
        $temp = $dvs;
        $m = 1;
        while ($temp << 1 <= $dvd) {
            $temp <<= 1;
            $m <<= 1;
        }
        $dvd -= $temp;
        $ans += $m;
    }
    $ans *= $sign;
    if($ans >= 2147483647) { return 2147483647;
    } else if($ans <= -2147483648){ return -2147483648;
    }
    return $ans;
}

divide(-2147483648, -1)
?>	