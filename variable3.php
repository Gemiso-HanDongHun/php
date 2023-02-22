<?php

$x = 5; // global scope  전역변수

function myTest() {

    // 변수 $x에 값이 존재하지 않습니다.
    echo "Variable x inside function is: $x". "\n";
} 

myTest();

echo "Variable x outside function is: $x";

?>