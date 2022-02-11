<?php

function quickSort(array $input)
{

    if (!isset($input)) {
        return [];
    }
    if (sizeof($input) < 2) {
        return $input;
    }

    $lt = [];
    $gt = [];

    $key = key($input);
    $shift = array_shift($input);

    foreach ($input as $value) {
        $value <= $shift ? $lt[] = $value : $gt[] = $value;
    }

    return array_merge(quickSort($lt), [$key => $shift], quickSort($gt));
}


$array = [12, 82, 54, 99999, 542, 75];

$array = quickSort($array);
echo implode(',', $array);