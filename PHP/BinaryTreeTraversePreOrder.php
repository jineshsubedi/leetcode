<?php


class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal($root) {
        $result = [];
        $this->preOrder($root, $result);
        return $result;
    }
    function preOrder($root, &$result): void
    {
        if ($root->val == NULL) return;
        array_push($result, $root->val);
        if($root->left)
            $this->preOrder($root->left, $result);
        if($root->right)
            $this->preOrder($root->right, $result);
    }
}

?>