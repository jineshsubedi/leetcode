<?php

class solution {
	private $res = array();

	function generateParenthesis($n)
	{
		$this->helper($n, 0, "");
		return $this->res;
	}
	private function helper($n, $open, $s)
	{
		if($n == 0 && $open == 0)
		{
			array_push($this->res, $s);
		}
		if($n > 0)
		{
			$this->helper($n-1, $open + 1, $s.'(');
		}
		if($open  > 0)
		{
			$this->helper($n, $open -1, $s.')');
		}
	}
}

?>