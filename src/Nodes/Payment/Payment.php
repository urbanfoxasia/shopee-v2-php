<?php

namespace ShopeeV2\Nodes\Payment;

use ShopeeV2\Nodes\NodeAbstract;
use ShopeeV2\ResponseData;

class Payment extends NodeAbstract
{
    /**
     * Use this API to get the transaction records of wallet.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function getTransactionList($parameters = []): ResponseData
    {
        return $this->post('/api/v1/wallet/transaction/list', $parameters);
    }

    /**
     * Use this API to fetch the detailed amount of offline adjustment.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function getPayoutDetail($parameters = []): ResponseData
    {
        return $this->post('/api/v1/payment/get_payout_details', $parameters);
    }

    /**
     * Use this API to fetch the escrow detail.
     * @param  array  $parameters
     * @return ResponseData
     */
    public function getEscrowDetail($parameters = []): ResponseData
    {
        return $this->get('/api/v2/payment/get_escrow_detail', $parameters);
    }
}
