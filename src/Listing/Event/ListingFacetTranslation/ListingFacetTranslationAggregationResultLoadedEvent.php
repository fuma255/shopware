<?php declare(strict_types=1);

namespace Shopware\Listing\Event\ListingFacetTranslation;

use Shopware\Api\Search\AggregationResult;
use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Event\NestedEvent;

class ListingFacetTranslationAggregationResultLoadedEvent extends NestedEvent
{
    const NAME = 'listing_facet_translation.aggregation.result.loaded';

    /**
     * @var AggregationResult
     */
    protected $result;

    public function __construct(AggregationResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): TranslationContext
    {
        return $this->result->getContext();
    }

    public function getResult(): AggregationResult
    {
        return $this->result;
    }
}