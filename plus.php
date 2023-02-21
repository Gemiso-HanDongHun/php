<?php

$sum = 0;

$startNum = 1;

$endNum = 100;

$i = $startNum;

while(true){

    $sum += $i;

    if($i == $endNum)
    break;

    $i++;
}

echo "{$startNum}에서 {$endNum}까지 더한 값은 {$sum}이다.";

?>