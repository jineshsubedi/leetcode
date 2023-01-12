<?php


function strStr123($haystack, $needle) {

	if($needle == "")
		return 0;

	$result = -1;
	$heystackCount = strlen($haystack);
	$needleCount = strlen($needle);

	for($i=0;$i<$heystackCount;$i++)
	{
		if($i + $needleCount > $heystackCount)
			break;

		if(substr($haystack, $i, $needleCount) == $needle)
		{
			$result = $i;
			break;
		}
	}
    return $result;
}


echo strStr123('sadbutsad', "sad"); //0
echo strStr123('leetcode', "leeto"); //-1
?>