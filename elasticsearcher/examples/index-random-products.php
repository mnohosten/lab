<?php
/**
 * Index random amount of documents into ElasticSearch
 * @var $searcher ElasticSearcher\ElasticSearcher
 */
require_once __DIR__ . '/bootstrap.php';

$faker = \Faker\Factory::create();

foreach (range(0, 10) as $id => $item) {
    $data = [
        'id' => $id,
        'name' => $faker->name,
    ];
    $searcher->documentsManager()->index('products', 'products', $data);
}
