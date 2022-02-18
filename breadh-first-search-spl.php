<?php

class BFS {
    public function bfs($G, $startVert) {
        $visited = array();
        for($i = 0; $i < $G->size; $i++) {
            array_push($visited, false);
        }
        $q = SplQueue();

        $q->enqueue($startVert);

        while(!$q->isEmpty()) {
            $v = $q->dequeue();
            foreach($G->adj[$v] as $adjV) {
                if(!$visited[$adjV]) {
                    $visited[$adjV] = true;
                    $q->enqueue($adjV);
                }
            }
        }
    }
}


class Graph {
    public $adj;
    public $size;
}