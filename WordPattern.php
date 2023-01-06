<?php

function wordPattern($pattern, $s) {
    
	$words = explode(' ', $s);
	if(count($words) != strlen($pattern))
		return 'false';

	$myarr = [];
	for($i=0;$i<strlen($pattern);$i++)
	{
		if(isset($myarr[$pattern[$i]]))
		{
			if($myarr[$pattern[$i]] !== $words[$i])
				return 'false';
		}else{
			if(in_array($words[$i], $myarr)){
				return 'false';
			}
			else{
				$myarr[$pattern[$i]] = $words[$i];
			}
		}
	}
	return 'true';
}

echo wordPattern("abba", "dog cat cat dog").' - Expected True <br>';
echo wordPattern("abba", "dog cat cat fish").' - Expected True <br>';
echo wordPattern("abba", "dog dog dog dog").' - Expected False <br>';
?>