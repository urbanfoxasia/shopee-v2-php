<?php

namespace ShopeeV2\Nodes\Item\Parameters;

use ShopeeV2\RequestParameters;

class InitTierVariation extends RequestParameters
{
    use CategoryIdTrait;

    public function getTierVariation()
    {
        return $this->parameters['tier_variation'];
    }

    public function getVariation()
    {
        return $this->parameters['variation'];
    }
}
