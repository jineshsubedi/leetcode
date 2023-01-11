<?php

class Solution {

    /**
     * @param Integer $n
     * @param Integer[][] $edges
     * @param Boolean[] $hasApple
     * @return Integer
     */
    public $distance = 0;
    public $gList = [];
    function minTime($n, $edges, $hasApple) {
    	foreach($edges as $e)
    	{
    		list($n1,$n2) = $e;
    		$this->gList[$n1][$n2] = true;
    		$this->gList[$n2][$n1] = true;
    	}
    	$this->dfs($hasApple, 0);
    	return $this->distance;
    }
    function dfs($hasApple, $node)
    {
    	foreach($this->gList[$node] as $k=>$unvisited)
    	{
    		if($unvisited)
    		{
    			$this->gList[$node][$k] = false;
    			$this->gList[$k][$node] = false;

    			$branchHasApple = $this->dfs($hasApple, $k);
    			$someBranchHasApple = $someBranchHasApple || $branchHasApple;
    			if($branchHasApple)
    			{
    				$this->distance += 2;
    			}
    		}
    	}
    	if($hasApple[$node] || $someBranchHasApple)
    		return true;
    }
}

?>