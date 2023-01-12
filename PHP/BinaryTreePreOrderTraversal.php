<?php

function preorderTraversal($root) {
	$result = [];
	$this->preOrder($root, $result);
	return $result;
}
void preOrder($curr, $result)
{
	if ($curr==null){
        return;
    }
    $result[] = $curr->val;
    $this->preOrder($curr->left,$result);
    $this->preOrder($curr->right,$result);
}


echo preorderTraversal([1,null,2,3]); //[1,2,3]

?>