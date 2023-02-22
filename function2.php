<?php

function sum($num1, $num2){

    $sum = $num1 + $num2;
    return $sum;

    echo "이 문장은 작동하지 않는다";

}

$plus = sum(2, 5);
echo $plus, "\n";

$minus = sum(2, -5);
echo $minus;

?>