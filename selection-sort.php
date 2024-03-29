<?php

Сортировка выбором (Selection sort) — алгоритм сортировки. Может быть как устойчивый, так и неустойчивый.
На массиве из n элементов имеет время выполнения в худшем, среднем и лучшем случае Θ(n2) (n в квадрате),
предполагая что сравнения делаются за постоянное время.

 - находим номер минимального значения в текущем списке
 - производим обмен этого значения со значением первой неотсортированной позиции
    (обмен не нужен, если минимальный элемент уже находится на данной позиции)
 - теперь сортируем хвост списка, исключив из рассмотрения уже отсортированные элементы


$arr  = [2, 5 ,3 , 2 ,3, 6, 7, 7 ,8];

function selectionSort(array $arr) {
    $size = count($arr);

    for ($i = 0; $i < $size-1; $i++)
    {
        $min = $i;

        for ($j = $i + 1; $j < $size; $j++)
        {
            if ($arr[$j] < $arr[$min])
            {
                $min = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

print_r(selectionSort($arr)) ;
