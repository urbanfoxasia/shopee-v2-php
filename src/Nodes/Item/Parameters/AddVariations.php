<?php

namespace ShopeeV2\Nodes\Item\Parameters;

use ShopeeV2\RequestParameters;

class AddVariations extends RequestParameters
{
    use ItemTrait;

    public function getVariations(): Variations
    {
        return $this->parameters['variations'];
    }

    /**
     * The variation of item is to list out all models of this product.
     * For example, iPhone has model of White and Black, then its variations includes "White iPhone" and "Black iPhone".
     *
     * @param Variations $variations
     * @return $this
     */
    public function setVariations(Variations $variations)
    {
        $this->parameters['variations'] = $variations;

        return $this;
    }
}
