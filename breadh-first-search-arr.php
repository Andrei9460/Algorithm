<?php

$graph = [
    'A' => ['B', 'C', 'D'],
    'B' => ['G', 'H'],
    'C' => ['G'],
    'D' => ['E', 'F'],
    'E' => [],
    'F' => [],
    'G' => [],
    'H' => []
];
$startNode = 'A';
$endNode   = 'H';

$searchQueue = [];
$searched    = [];

foreach($graph[$startNode] as $value) {
    $searchQueue[] = $value;
}

while($searchQueue) {
    $node = array_shift($searchQueue);

    if(!in_array($node, $searched)) {
        if($node === $endNode) {
            echo 'Целевая точка найдена';
            die();
        } else {
            foreach($graph[$node] as $value) {
                $searchQueue[] = $value;
            }

            $searched[] = $node;
        }
    }
}

echo 'Целевая точка не найдена';