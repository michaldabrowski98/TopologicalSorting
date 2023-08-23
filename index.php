<?php

require_once __DIR__ . '/vendor/autoload.php';

use Algorithms\TopologicalSorting\Graph;
use Algorithms\TopologicalSorting\TopologicalSorting;
function test(): void
{
    $testGraph = new Graph(false, true);

    $v1 = $testGraph->addVertex("Slipki");
    $v2 = $testGraph->addVertex("Spodnie");
    $v3 = $testGraph->addVertex("Pasek");
    $v4 = $testGraph->addVertex("Koszula");
    $v5 = $testGraph->addVertex("Krawat");
    $v6 = $testGraph->addVertex("Marynarka");
    $v7 = $testGraph->addVertex("Skarpetki");
    $v8 = $testGraph->addVertex("Buty");
    $v9 = $testGraph->addVertex("Zegarek");

    $testGraph->addEdge($v1, $v2);
    $testGraph->addEdge($v2, $v3);
    $testGraph->addEdge($v3, $v6);
    $testGraph->addEdge($v1, $v8);
    $testGraph->addEdge($v2, $v8);
    $testGraph->addEdge($v4, $v3);
    $testGraph->addEdge($v4, $v5);
    $testGraph->addEdge($v5, $v6);
    $testGraph->addEdge($v7, $v8);

    $sort = new TopologicalSorting();
    $sort->sort($testGraph);
}

test();