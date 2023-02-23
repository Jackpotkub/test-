<?php

function add($num1, $num2=10) {  

    $result=$num1 + $num2;
    echo "Result add :" . $result;
}
function subtract($num1,$num2) {

    $result = $num1 - $num2;
    return $result;
}
function Multiply($num1, $num2, &$result)
{

    $result = $num1 * $num2;
    
}

    $num1 = 15;
    $num2 = null;
    $resultMultiply = 0;
add($num1, $num2);
    $resultSubtract =  subtract($num1, $num2);
echo "Result Subtract : " . $resultSubtract;

Multiply($num1, $num2, $resultMultiply);
echo "Result Multiply :" . $resultMultiply;
?>