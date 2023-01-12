<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxDepth($root) {
        if(!$root)
        	return 0;
        $maxLeft = $this->maxDepth($root->left);
        $maxRight = $this->maxDepth($root->right);
        return max($maxLeft,$maxRight)+1;
    }
}

?>