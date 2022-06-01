<?php

namespace ShopeeV2\Nodes\Item;

use ShopeeV2\Nodes\NodeAbstract;
use ShopeeV2\ResponseData;

class Item extends NodeAbstract
{
    /**
     * Use this call to add a product item.
     *
     * @param array|Parameters\Add $parameters
     * @return ResponseData
     */
    public function addItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/add_item', $parameters);
    }

    /**
     * @param $parameters
     * @return ResponseData
     */
    public function initTierVariation($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/init_tier_variation', $parameters);
    }

    /**
     * @param $parameters
     * @return ResponseData
     */
    public function addModel($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/add_model', $parameters);
    }

    /**
     * @param $parameters
     * @return ResponseData
     */
    public function updateItem($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_item', $parameters);
    }

    /**
     * @param $parameters
     * @return ResponseData
     */
    public function updatePrice($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_price', $parameters);
    }

    /**
     * @param $parameters
     * @return ResponseData
     */
    public function updateStock($parameters = []): ResponseData
    {
        return $this->post('/api/v2/product/update_stock', $parameters);
    }

    /**
     * @return ResponseData
     */
    public function getCategory(): ResponseData
    {
        return $this->get('/api/v2/product/get_category');
    }

    /**
     * @return ResponseData
     */
    public function getAttributes(): ResponseData
    {
        return $this->get('/api/v2/product/get_attributes');
    }

    /**
     * @return ResponseData
     */
    public function getModelList(): ResponseData
    {
        return $this->get('/api/v2/product/get_model_list');
    }

}
