<?php

function myTest() {
    $x = 5; // local scope
    echo "Variable x inside function is: $x". "\n";
} 
myTest();

// 변수 $x에 값이 존재하지 않습니다.
echo "Variable x outside function is: $x". "\n";

echo myTest();

// 변수 $x 는 함수 공간안에서만 값을 가지고 있다. 

// 함수 밖에서 함수에서 선언한 변수를 호출하게 되면 호출되지 않음


?>