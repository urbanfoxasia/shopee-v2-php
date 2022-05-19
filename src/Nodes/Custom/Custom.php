<?php

namespace ShopeeV2\Nodes\Custom;

use ShopeeV2\Nodes\NodeAbstract;
use ShopeeV2\RequestParametersInterface;
use ShopeeV2\ResponseData;

class Custom extends NodeAbstract
{
    /**
     * Use this call for get custom API v1
     * Formatted like it : '/api/v1/shop/get'
     *
     * @param $url
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function request($url, $parameters = []): ResponseData
    {
        return $this->post($url, $parameters);
    }
}
