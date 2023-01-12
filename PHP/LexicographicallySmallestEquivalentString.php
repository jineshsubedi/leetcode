<?php

private $par = [];

public function find($x)
{
	if($this->par[$x] == -1)
		return $x;
	return $this->par[$x] = $this->find($this->par[$x]);
}

public function Union($x, $y)
{
	$x = $this->find($x);
	$y = $this->find($y);

	if($x !== $y)
		$this->par[max($x,$y)] = min($x, $y);
}
function smallestEquivalentString($s1, $s2, $baseStr) {
    $this->par = array_fill(0, 26, -1);
    for($i = 0; $i<strlen($s1); $i++)
    {
    	$this->Union(ord($s1[$i]) - ord('a'), ord($s2[$i]) - ord('a'));
    }
    for($i=0;$i<strlen($baseStr); $i++)
    {
    	$baseStr[$i] = chr($this->find(ord($baseStr[$i]) - ord('a')) + ord('a'));
    }
    return $baseStr;
}

echo smallestEquivalentString("parker", "morris", "parser"); //makkek
echo smallestEquivalentString("hello", "world", "hold"); //hdld

?>