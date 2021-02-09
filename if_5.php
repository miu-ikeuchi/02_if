<?php

$num = 23;

for ($i=2; $i<=$num; $i++) { 
    if ($num % $i == 0) {
        echo $num . 'は素数ではありません';
        break;
    } 
    elseif ($num % $i == 1){
        echo $num . 'は素数です';
        break;
    } 
}
