<?php

function intToRoman($num) {
    $romans = array(
	    'M' => 1000,
	    'CM' => 900,
	    'D' => 500,
	    'CD' => 400,
	    'C' => 100,
	    'XC' => 90,
	    'L' => 50,
	    'XL' => 40,
	    'X' => 10,
	    'IX' => 9,
	    'V' => 5,
	    'IV' => 4,
	    'I' => 1,
	); 
	$roman = '';
	while ($num > 0) {
	   	$quo = (int)($num / 1000);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'M';
	   		}
	   		$num = $num % 1000;
	   	}
	   	$quo = (int)($num / 900);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'CM';
	   		}
	   		$num = $num % 900;
	   	}
	   	$quo = (int)($num / 500);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'D';
	   		}
	   		$num = $num % 500;
	   	}
	   	$quo = (int)($num / 400);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'CD';
	   		}
	   		$num = $num % 400;
	   	}
	   	$quo = (int)($num / 100);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'C';
	   		}
	   		$num = $num % 100;
	   	}
	   	$quo = (int)($num / 90);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'XC';
	   		}
	   		$num = $num % 90;
	   	}
	   	$quo = (int)($num / 50);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'L';
	   		}
	   		$num = $num % 50;
	   	}
	   	$quo = (int)($num / 40);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'XL';
	   		}
	   		$num = $num % 40;
	   	}
	   	$quo = (int)($num / 10);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'X';
	   		}
	   		$num = $num % 10;
	   	}
	   	$quo = (int)($num / 9);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'IX';
	   		}
	   		$num = $num % 9;
	   	}
	   	$quo = (int)($num / 5);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'V';
	   		}
	   		$num = $num % 5;
	   	}
	   	$quo = (int)($num / 4);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'IV';
	   		}
	   		$num = $num % 4;
	   	}
	   	$quo = (int)($num / 1);
	   	if($quo > 0)
	   	{
	   		for($i=0;$i<$quo;$i++)
	   		{
	   			$roman .= 'I';
	   		}
	   		$num = $num % 1;
	   	}
   	}   
   	echo $roman;
}

echo intToRoman(3); //expected III
echo intToRoman(58); //expected LVIII
echo intToRoman(1994); //expected MCMXCIV

?>