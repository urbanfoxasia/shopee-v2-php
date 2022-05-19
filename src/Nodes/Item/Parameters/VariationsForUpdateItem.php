<?php

namespace ShopeeV2\Nodes\Item\Parameters;

use ShopeeV2\RequestParameterCollection;
use ShopeeV2\RequestParametersInterface;

class VariationsForUpdateItem extends RequestParameterCollection
{
    /**
     * @param VariationForUpdateItem|RequestParametersInterface $parameter
     * @return $this
     */
    public function add(RequestParametersInterface $parameter)
    {
        parent::add($parameter);

        return $this;
    }

    /**
     * @param array $parameters
     * @return $this
     */
    public function fromArray(array $parameters)
    {
        foreach ($parameters as $parameter) {
            $this->add(new VariationForUpdateItem($parameter));
        }

        return $this;
    }
}
