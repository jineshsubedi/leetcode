<?php

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    public $result = []; 
    function postorderTraversal($root) {
        if($root != NULL)
        {
            $this->postorderTraversal($root->left);
            $this->postorderTraversal($root->right);
            array_push($this->result, $root->val);
        }
        return $this->result;
    }
}

echo $this->postorderTraversal([1,null,2,3]); // [3,2,1]
?>