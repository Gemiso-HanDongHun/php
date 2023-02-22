<?php

function hihi(){

    echo "안녕";

}


hihi();    // 함수 호출

echo "\n";


function increment($para)
{
    $para++; // $value의 값을 복사하여 increment() 함수에 인수로 전달함.

    echo($para), "\n";  // 함수 호출시 $para 값이 출력되도록 echo 사용

}

$value = 1;

increment($value);

echo $value;


?>