<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        return $this->solve(0, count($nums)-1, $nums);
    }
    function solve($s,$e,&$nums)
    {
    	if($s > $e)
    		return null;

    	$mid = intval(($s+$e)/2);
    	$root = new TreeNode($nums[$mid]);
    	$root->left = $this->solve($s,$mid-1,$nums);
    	$root->right = $this->solve($mid+1, $e, $nums);

    	return $root;
    }
}
?>