<?php

Бинарный поиск - это алгоритм, на входе он получает отсортированный 
список элементов. Если элемент, который вы ищете, присутствует в списке, то бинарный 
поиск возвращает ту позицию, в которой он был найден. В противном случае бинарный поиск возвращает null.

делим на 2 смотрим больше или меньше искомое значение и отсекаем половину из поиска

log2n это бинарный, а простой за n

Бинарный поиск работает только в том случае, если список отсортирован. 

low - "низкий" это левое значение 
high - "Высокий" это правое значение 
mid - центр 
guess - предпологаемое значение 
count() -  подсчет элементов в массиве
floor() - Округляет дробь в меньшую сторону


function binarySearchIterativ(array $arr, $x)
{
    if (count($arr) === 0) return false;
    $low = 0;
    $high = count($arr) - 1;

    while ($low <= $high) {

        // берем значение из центра
        $mid = floor(($low + $high) / 2);

        // сравниваем значение из центра
        if ($arr[$mid] == $x) {
            return true;
        }

        if ($x < $arr[$mid]) {
            // поиск по левой стороне
            $high = $mid - 1;
        } else {
            // поиск по правой стороне
            $low = $mid + 1;
        }
    }

    return false;
}

// пример
$arr = array(1, 2, 3, 4, 5,6,7,8,9,23,37,89);
$value = 7;
if (binarySearchIterativ($arr, $value) == true) {
    echo $value . " Exists";
} else {
    echo $value . " Doesnt Exist";
}


// Recursive

function binarySearchRecursive(Array $arr, $start, $end, $x)
{
    if ($end < $start)
        return false;

    $mid = floor(($end + $start)/2);
    if ($arr[$mid] == $x)
        return true;

    elseif ($arr[$mid] > $x) {
        // повторно вызываем функцию с изменением арзументов [start, mid - 1]
        return binarySearchRecursive($arr, $start, $mid - 1, $x);
    }
    else {
        // повторно вызываем функцию с изменением арзументов  [mid + 1, end]
        return binarySearchRecursive($arr, $mid + 1, $end, $x);
    }
}

// пример
$arr = array(1, 2, 3, 4, 5,6,7,8,9,23,37,89);
$value = 40;
if(binarySearchRecursive($arr, 0, count($arr) - 1, $value) == true) {
    echo $value." Exists";
}
else {
    echo $value." Doesnt Exist";
}
