<?php 

function detectCapitalUse($word) {
	//count word
	$count = strlen($word);
	if($count == 0) return 'false';
	if($count == 1) return 'true';

	$flag = 0; 
	// loop the word
	for($i=0;$i<$count;$i++)
	{
		if(ctype_upper($word[$i]) && $flag == 0 && $i > 0)
			return 'false';
		if(ctype_upper($word[$i]))
			$flag++;
	}
	if($flag == 0 || $flag == 1 || $flag == $count)
		return 'true';
	return 'false';

}	

//test cases

echo detectCapitalUse('NEPAL').'-'; //true
echo detectCapitalUse('Nepal').'-'; //true
echo detectCapitalUse('nepal').'-'; //true
echo detectCapitalUse('nePal').'-'; //false
echo detectCapitalUse('NEpAL').'-'; //false
echo detectCapitalUse('nepaL').'-'; //false
echo detectCapitalUse('FLaG').'-'; //false

?>