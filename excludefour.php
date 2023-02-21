<?php

$num = 4;

for($i =0; $i <= 100; $i++){

    if($i % $num == 0)
    continue;

    echo "{$i}\n";
   
}

?>