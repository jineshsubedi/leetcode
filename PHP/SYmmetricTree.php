<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        return $this->isMirror($root, $root);
    }

    function isMirror($root1, $root2)
    {
    	if($root1 == null && $root2 == null)
    		return true;
    	if($root1 == null || $root2 == null)
    		return false;

    	return ($root1->val == $root2->val) && ($this->isMirror($root1->left, $root2->right)) && ($this->isMirror($root1->right, $root2->left));
    }
}

?>