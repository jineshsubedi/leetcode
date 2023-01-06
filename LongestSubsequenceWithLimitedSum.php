<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $queries
     * @return Integer[]
     */
    function answerQueries($nums, $queries) {
        $answer = [];
        sort($nums);
        foreach($queries as $query)
        {
            $sum = 0;
            $counter = 0;
            $n = count($nums);
            for($i=0;$i<$n;$i++)
            {
                if($nums[$i] <= $query)
                {
                    $sum = $sum + $nums[$i];
                    if($sum <= $query)
                        $counter++;
                    else
                        $sum = $sum - $nums[$i];
                }
            }
            $answer[] = $counter;
        }
        return $answer;
    }
}
    

?>