<?php

function canCompleteCircuit($gas, $cost) {
    $total_gas = 0;
    $total_cost = 0;
    $current_gas = 0;
    $starting_point = 0;
    for($i = 0; $i < count($gas); $i++)
    {
        $total_gas += $gas[$i];
        $total_cost += $cost[$i];
        $current_gas += $gas[$i] - $cost[$i];
        if($current_gas < 0)
        {
            $starting_point = $i + 1;
            $current_gas = 0;
        } 
    }
    return ($total_gas<$total_cost) ? -1 : $starting_point;
}

echo canCompleteCircuit([1,2,3,4,5], [3,4,5,1,2]); //expected 3
echo canCompleteCircuit([2,3,4], [3,4,3]); //expected -1
echo canCompleteCircuit([3,1,1], [1,2,2]); //expected 3

?>