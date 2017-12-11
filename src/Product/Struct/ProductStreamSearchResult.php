<?php declare(strict_types=1);

namespace Shopware\Product\Struct;

use Shopware\Api\Search\SearchResultInterface;
use Shopware\Api\Search\SearchResultTrait;
use Shopware\Product\Collection\ProductStreamBasicCollection;

class ProductStreamSearchResult extends ProductStreamBasicCollection implements SearchResultInterface
{
    use SearchResultTrait;
}