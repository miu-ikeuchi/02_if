<?php

$num = 10;

for ($i=2; $i<=$num; $i++) { 
    if ($num % $i == 0) {
    echo $num . 'は素数ではありません';
    break;
    } else {
    echo $num . 'は素数です';
    } 
}