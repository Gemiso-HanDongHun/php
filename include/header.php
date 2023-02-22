<?php

    echo "header \n";
    
    include "./body.php";  // 현재 디렉토리 안의 body.php 
    echo "\n";
    
    include_once "./footer.php"; // 현재 디렉토리 안의 footer.php 
    echo "\n";

    require "../plus.php";
    echo "\n";

    include "../function2.php"; // 한 단계 위의 파일 incldue 두 단계 위의 파일은 ../..

?>