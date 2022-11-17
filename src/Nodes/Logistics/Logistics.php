<?php

namespace ShopeeV2\Nodes\Logistics;

use ShopeeV2\FileResponseData;
use ShopeeV2\Nodes\NodeAbstract;
use ShopeeV2\RequestParametersInterface;
use ShopeeV2\ResponseData;

class Logistics extends NodeAbstract
{

    /**
     * Use this call to get all required param for init logistic.
     *
     * @return ResponseData
     */
    public function getChannelList(): ResponseData
    {
        return $this->get('/api/v2/logistics/get_channel_list');
    }

    /**
     * Use this call to get all required param for init logistic.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getAddress($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/address/get', $parameters);
    }

    /**
     * Use this API to get shipping document for orders.
     *
     * @param array|RequestParametersInterface $parameters
     * @return FileResponseData
     */
    public function getShippingDocument($parameters = []): FileResponseData
    {
        return $this->download('/api/v2/logistics/download_shipping_document', $parameters);
    }

    /**
     * Use this call to get all required param for init logistic.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getBranch($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/branch/get', $parameters);
    }

    /**
     * Use this API to get airwaybill for fulfillment orders.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getForderWaybill($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/forder_waybill/get_mass', $parameters);
    }

    /**
     * Use this call to get all supported Logistic Channel.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getLogistics($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/channel/get', $parameters);
    }

    /**
     * Get all the logistics info of an order to Init.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getShippingParameter($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_shipping_parameter', $parameters);
    }

    /**
     * Use this call to get the logistics tracking information of an order.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getLogisticsMessage($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/tracking', $parameters);
    }

    /**
     * Use this call to fetch the logistics information of an order, these info can be used for waybill printing.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getOrderLogistics($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/order/get', $parameters);
    }

    /**
     * Use this call to get all required param for init logistic.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getParameterForInit($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/init_parameter/get', $parameters);
    }

    /**
     * Use this call to get all required param for init logistic.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getTimeSlot($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/timeslot/get', $parameters);
    }

    /**
     * Use this API to get tracking number of orders.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function getTrackingNumber($parameters = []): ResponseData
    {
        return $this->get('/api/v2/logistics/get_tracking_number', $parameters);
    }

    /**
     * Use this call to arrange Pickup, Dropoff or shipment for non-integrated logistic channels.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function shipOrder($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/ship_order', $parameters);
    }

    /**
     * Set Logistic Status to PICKUP_DONE, this API only works for non-integrated logistic channels.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function setLogisticStatus($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/offline/set', $parameters);
    }

    /**
     * Use this call to set tracking number for each order in batch.
     *
     * @param array|RequestParametersInterface $parameters
     * @return ResponseData
     */
    public function setTrackingNo($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/tracking_number/set_mass', $parameters);
    }

    /**
     * Configure shop level logistics.
     *
     * @param array|RequestParametersInterface $parameters $parameters
     * @return ResponseData
     */
    public function updateShopLogistics($parameters = []): ResponseData
    {
        return $this->post('/api/v1/logistics/channels/update', $parameters);
    }

    /**
     * Create shipping document
     *
     * @param array|RequestParametersInterface $parameters $parameters
     * @return ResponseData
     */
    public function createShippingDocument($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/create_shipping_document', $parameters);
    }

    /**
     * Use this call to shipping document create result
     *
     * @param array|RequestParametersInterface $parameters $parameters
     * @return ResponseData
     */
    public function getShippingDocumentResult($parameters = []): ResponseData
    {
        return $this->post('/api/v2/logistics/get_shipping_document_result', $parameters);
    }
}
