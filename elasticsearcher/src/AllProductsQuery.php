<?php
namespace PhpLab\ElasticSearcher;

use ElasticSearcher\Abstracts\AbstractQuery;

class AllProductsQuery extends AbstractQuery
{
    protected function setup()
    {
        $this->searchIn('products', 'products');
        $this->set('query.bool.filter', []); //new TermQuery('year', 2014)
    }


}