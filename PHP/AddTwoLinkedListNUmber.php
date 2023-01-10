<?php

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        return $this->addListNodeWithCarry($l1, $l2);
    }
    function addListNodeWithCarry($l1, $l2, $c=0)
    {
        $x = $y = 0;
        $n1 = $n2 = null;

        if($l1){
            $x = $l1->val;
            $n1 = $l1->next;
        }
        if($l2){
            $y = $l2->val;
            $n2 = $l2->next;
        }
        $sum = $x + $y + $c;
        if($sum > 9)
        {
            $c = 1;
        }else{
            $c = 0;
        }

        $node = new ListNode($sum % 10);

        if($n1 || $n2 || $c)
        {
            $node->next = $this->addListNodeWithCarry($n1, $n2, $c);
        }
        
        return $node;
    }
}

?>