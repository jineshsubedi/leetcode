<?php

	function isValidSudoku($board)
	{
		$array = [];
		for($i=0;$i< 9;$i++)
		{
			for($j=0;$j<9;$j++)
			{
				$number = $board[$i][$j]; 
				if($number !== "."){
					if(
						in_array($number."_foundin_r_".$i, $array) ||
						in_array($number."_foundin_c_".$j, $array) ||
						in_array($number."_foundin_b_".floor($i/3).floor($j/3), $array)
					)
					{
						return 'false';
					}
					else{
						array_push($array, $number."_foundin_r_".$i, $number."_foundin_c_".$j, $number."_foundin_b_".floor($i/3).floor($j/3));
					}
				}
			}
		}
		return 'true';
	}
	echo isValidSudoku([["5","3",".",".","7",".",".",".","."]
,["6",".",".","1","9","5",".",".","."]
,[".","9","8",".",".",".",".","6","."]
,["8",".",".",".","6",".",".",".","3"]
,["4",".",".","8",".","3",".",".","1"]
,["7",".",".",".","2",".",".",".","6"]
,[".","6",".",".",".",".","2","8","."]
,[".",".",".","4","1","9",".",".","5"]
,[".",".",".",".","8",".",".","7","9"]]);

?>