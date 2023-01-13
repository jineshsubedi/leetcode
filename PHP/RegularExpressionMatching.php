<?php

function isMatch($s,$p)
{
	$m = strlen($s);
    $n = strlen($p);
    $dp = array();
    for ($i = 0; $i <= $m; $i++) {
        for ($j = 0; $j <= $n; $j++) {
            $dp[$i][$j] = false;
        }
    }

    $dp[0][0] = true;
    for ($i = 0; $i <= $m; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if ($p[$j - 1] == '*') {
                $dp[$i][$j] = $dp[$i][$j - 2] || ($i && $dp[$i - 1][$j] && ($s[$i - 1] == $p[$j - 2] || $p[$j - 2] == '.'));
            } else if ($i > 0 && ($s[$i - 1] == $p[$j - 1] || $p[$j - 1] == '.')) {
                $dp[$i][$j] = $dp[$i - 1][$j - 1];
            }
        }
    }
    return $dp[$m][$n];
}
echo isMatch('aa', 'a');
// echo isMatch('aa', 'a*');

?>