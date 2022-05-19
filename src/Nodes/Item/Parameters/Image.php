<?php

namespace ShopeeV2\Nodes\Item\Parameters;

use ShopeeV2\RequestParameters;

class Image extends RequestParameters
{
    public function getUrl(): string
    {
        return $this->parameters['url'];
    }

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->parameters['url'] = $url;

        return $this;
    }
}
