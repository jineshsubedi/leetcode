
<?php 
$str = '(}}){{[]';
isValid($str);

function isValid($s) {
    $array_stack = [];
    for($i=0;$i<strlen($s);$i++)
    {
        if($s[$i] == '(')
        {
            array_push($array_stack, 0);
        }
        if($s[$i] == ')')
        {
            if(array_pop($array_stack) !== 0)
                echo 'false <br>';
        }
        if($s[$i] == '{')
        {
            array_push($array_stack, 1);
        }
        if($s[$i] == '}')
        {
            if(array_pop($array_stack) !== 1)
                echo 'false <br>';
        }
        if($s[$i] == '[')
        {
            array_push($array_stack, 2);
        }
        if($s[$i] == ']')
        {
            if(array_pop($array_stack) !== 2)
                echo 'false <br>';
        }
    }	
    echo empty($array_stack) ?  'true' : 'false';   
}

?>