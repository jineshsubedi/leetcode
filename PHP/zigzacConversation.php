<?php 

function convert($s, $numRows) {
	$count_items_in_block = (2 * $numRows - 2) > 0
            ? 2 * $numRows - 2
            : $numRows;

        $items_group = \str_split($s, $count_items_in_block);
        $result      = [];
        foreach ($items_group as $it) {
            $items = \str_split($it);
            foreach ($items as $j => $item) {
                if ($j < $numRows) {
                    $result[$j] = ($result[$j] ?? '') . $item;
                } else {
                    $result[2 * $numRows - 2 - $j] .= $item;
                }
            }
        }

        return \implode('', $result);
}

echo convert("PAYPALISHIRING", 3).' = PAHNAPLSIIGYIR';
?>