<?php
require __DIR__ . '/../../autoload.php';

use ElasticSearcher\Environment;
use ElasticSearcher\ElasticSearcher;
use PhpLab\ElasticSearcher\ProductIndex;

$env = new Environment(
    ['hosts' => ['localhost:9200']]
);
$searcher = new ElasticSearcher($env);
// Register indexes.
$searcher->indicesManager()->register(new ProductIndex());
