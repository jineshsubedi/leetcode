<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {
       return $this->getTreeDepth($root) !== -1;
    } 
    function getTreeDeepth($root) 
    { 
    	if ($root === null) {
            return 0;
        }

        $leftDepth = $this->getTreeDepth($root->left);
        if ($leftDepth === -1) {
            return -1;
        }

        $rightDepth = $this->getTreeDepth($root->right);
        if ($rightDepth === -1) {
            return -1;
        }

        if (abs($leftDepth - $rightDepth) > 1) {
            return -1;
        }

        return max($leftDepth, $rightDepth) + 1;
    }
}

?>