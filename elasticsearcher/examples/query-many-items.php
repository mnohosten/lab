<?php
/**
 * Index random amount of documents into ElasticSearch
 * @var $searcher ElasticSearcher\ElasticSearcher
 */
require_once __DIR__ . '/bootstrap.php';

use PhpLab\ElasticSearcher\AllProductsQuery;

if (!$searcher->indicesManager()->exists('products')) {
    exit('Run basic.php first to create some data.');
}

$query = new AllProductsQuery($searcher);
dump($query->run()->getRawResults()['hits']);die;

