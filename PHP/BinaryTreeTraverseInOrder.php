<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    public $result = []; 
    function inorderTraversal($root) {
        if($root != NULL)
        {
            $this->inorderTraversal($root->left);
            array_push($this->result, $root->val);
            $this->inorderTraversal($root->right);
        }
        return $this->result;
    }
}

echo $this->inorderTraversal([1,null,2,3]); // [3,2,1]
?>