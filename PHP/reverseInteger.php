<?php

function reverse($x) {
    $sign = ($x < 0) ? -1 : 1;
    $num = abs($x);
    $result = 0;
    while((int)$num > 0)
    {
        $temp = $num % 10;
        $num = $num / 10;
        $result = $result * 10 + $temp;
    }
    if($result < -1 * pow(2,31) || $result > pow(2,31) - 1)
        return 0;
    return $result * $sign;
}

echo reverse(1534236469).'<br>';
echo reverse(123456).'<br>';
echo reverse(-123).'<br>';
echo reverse(120).'<br>';

?>