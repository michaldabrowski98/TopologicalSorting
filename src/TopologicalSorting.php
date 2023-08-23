<?php

namespace Algorithms\TopologicalSorting;

class TopologicalSorting
{
    public function sort(Graph $graph): array
    {
        $stack = [];
        $visitedVertices = [];
        foreach ($graph->getVertices() as $vertex) {
            if (!in_array($vertex, $visitedVertices)) {
                $visitedVertices[] = $vertex;
                $this->depthFirstTraversal($vertex, $visitedVertices, $stack);
            }
        }

        return array_reverse($stack);
    }
    private function depthFirstTraversal(Vertex $vertex, array& $visitedVertices, array& $stack): void
    {
        foreach ($vertex->getEdges() as $edge) {
            $neighbour = $edge->getEnd();

            if (!in_array($neighbour, $visitedVertices)) {
                $visitedVertices[] = $neighbour;
                $this->depthFirstTraversal($neighbour, $visitedVertices, $stack);
            }
        }
        $stack[] = $vertex;
    }
}