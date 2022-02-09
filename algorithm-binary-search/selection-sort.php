<?php

$arr  = [2, 5 ,3 , 2 ,3, 6, 7, 7 ,8];

function selectionSort(array $arr) {
    $count= count($arr);
    if ($count <= 1){
        return $arr;
    }

    for ($i = 0; $i < $count; $i++){
        $k = $i;

        for($j = $i + 1; $j < $count; $j++){
            if ($arr[$k] > $arr[$j]){
                $k = $j;
            }

            if ($k != $i){
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }

    return $arr;
}

print_r(selectionSort($arr)) ;