<?php

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head) {
        $current = $head->next;
        $prev = $head;

        while($current != $head)
        {
        	if($prev->val == $current->val)
        	{
        		$temp = $current->next;
        		$prev->next = $temp;
        		$current = $temp;
        	}else{
        		$prev = $current;
        		$current = $current->next;
        	}
        }
        return $head;
    }
}

?>