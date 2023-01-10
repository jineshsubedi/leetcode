<?php

class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {

    	$node = new ListNode();
    	$node->next = $head;
    	$fp = $node;
    	$lp = $node;
    	// Traverse the LinkedList $n times
    	for($i=0;$i<$n;$i++)
    	{
    		$fp = $fp->next;
    	}
    	// Increase the slow pointer
    	while($fp->next != null)
    	{
    		$fp = $fp->next;
    		$lp = $lp->next;
    	}
    	// Deletion step
    	$lp->next = $lp->next->next;
    	// Return head
    	return $node->next;
        
    }
}

?>