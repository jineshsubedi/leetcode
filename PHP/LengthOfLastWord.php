<?php

function lengthOfLastWord($s) {
    $strs = explode(' ', $s);
    $count = count($strs);
    if($count == 1)
        return strlen($strs[$count - 1]);
    for($i=$count-1;$i>=0;$i--)
    {
        if(strlen($strs[$i]) > 0)
            return strlen($strs[$i]);
    }
    return 0;
}

echo lengthOfLastWord("   fly me   to   the moon  ");
echo lengthOfLastWord("a ");

?>