<?php


function simplifyPath($path) {
       
    $res = "";
    $tmp = "";
    $stk = [];
    $parts = explode('/', $path);
    for($i=0;$i<count($parts);$i++) 
    {
    	$tmp = $parts[$i];
    	if($tmp == "" || $tmp == ".")
    		continue;
    	if($tmp == ".." and !empty($stk))
    		array_pop($stk);
    	else if($tmp != "..")
    		array_push($stk, $tmp);
    } 
    $res = '/'.implode('/',$stk);
    return $res == "" ? "/" : $res;
}


echo simplifyPath("/home/"); // /home
echo simplifyPath("/../"); // /
?>