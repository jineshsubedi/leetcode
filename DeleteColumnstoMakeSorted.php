<?php 

function minDeletionSize($strs) {
	$counter = 0;
	for($i=0;$i<strlen($strs[0]);$i++)
	{
		for($j=0;$j<count($strs)-1;$j++)
		{
			if($strs[$j][$i] > $strs[$j+1][$i])
			{
				$counter++;
				break;
			}
		}
	}
	return $counter;
}
echo minDeletionSize(["cba","daf","ghi"]); // Expected 1
echo minDeletionSize(["a","b"]);	// Expected 0
echo minDeletionSize(["zyx","wvu","tsr"]);	// Expected 3
echo minDeletionSize(["rrjk","furt","guzm"]);	// Expected 2
?>