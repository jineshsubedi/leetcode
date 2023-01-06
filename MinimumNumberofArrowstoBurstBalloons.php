<?php

function findMinArrowShots($points) {
    $count = count($points);

    $key_values = array_column($points, 0); 
	array_multisort($key_values, SORT_ASC, $points);

	// usort($points, function ($a,$b) {
	// 		return $a[0] <=> $b[0];
	// 	});

    if($count == 0) return 0;
    $ans = 1;
    $top = $points[0][1];
    for($i=0;$i<$count;$i++)
    {
    	sort($points[$i]);
        if($points[$i][0] <= $top)
        {
            $top = min($top, $points[$i][1]);
        }else{
            $top = $points[$i][1];
            $ans++;
        }

    }
    return $ans;
}

// echo findMinArrowShots([[1,2],[2,3],[3,4],[4,5]]); // 2
// echo findMinArrowShots([[1,2],[3,4],[5,6],[7,8]]); // 4
// echo findMinArrowShots([[1,2],[2,3],[3,4],[4,5]]); // 2
echo findMinArrowShots([[9,12],[1,10],[4,11],[8,12],[3,9],[6,9],[6,7]]); // 2

?>