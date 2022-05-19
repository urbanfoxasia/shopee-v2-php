<?php

namespace ShopeeV2\Nodes\Returns;

use ShopeeV2\Nodes\NodeAbstract;
use ShopeeV2\RequestParametersInterface;
use ShopeeV2\ResponseData;

class Returns extends NodeAbstract
{
    /**
     * Confirm return.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function confirmReturn($parameters = []): ResponseData
    {
        return $this->post('/api/v1/returns/confirm', $parameters);
    }

    /**
     * Dispute return.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function disputeReturn($parameters = []): ResponseData
    {
        return $this->post('/api/v1/returns/dispute', $parameters);
    }

    /**
     * Get return list.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getReturnList($parameters = []): ResponseData
    {
        return $this->post('/api/v1/returns/get', $parameters);
    }

    /**
     * Use this api to get detail information of a returned order.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getReturnDetail($parameters = []): ResponseData
    {
        return $this->post('/api/v1/returns/detail', $parameters);
    }
}
