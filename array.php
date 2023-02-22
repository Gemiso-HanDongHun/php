<?php

$arr = array( // 1차원 배열을 3개 갖는 2차원 배열 선언
    array(),
    array(),
    array()
);

$arr[0][0] = "apple"; // 배열 요소 입력
$arr[0][1] = "korea";
$arr[0][2] = 1000;

$arr[1][0] = "banana";
$arr[1][1] = "philippines";
$arr[1][2] = 2000;

$arr[2][0] = "orange";
$arr[2][1] = "us";
$arr[2][2] = 1500;

echo $arr[0][0]. ", " .$arr[0][1]. ", " .$arr[0][2]."\n";
echo $arr[1][0]. ", " .$arr[1][1]. ", " .$arr[1][2]."\n";
echo $arr[2][0]. ", " .$arr[2][1]. ", " .$arr[2][2];

?>