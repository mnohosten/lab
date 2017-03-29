<?php
namespace PhpLab\ElasticSearcher;

use ElasticSearcher\Abstracts\AbstractIndex;

class ProductIndex extends AbstractIndex
{

    public function getName()
    {
        return 'products';
    }

    public function setup()
    {
        $this->setTypes([
            'products' => [
                'properties' => [
                    'id' => ['type' => 'integer'],
                    'name' => ['type' => 'text'],
                ]
            ]
        ]);
    }

}
