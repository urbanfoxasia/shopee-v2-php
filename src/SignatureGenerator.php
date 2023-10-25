<?php

namespace ShopeeV2;

use function hash_hmac;

class SignatureGenerator implements SignatureGeneratorInterface
{
    const TYPE_SHOP_APIS = 'SHOP_APIS';
    const TYPE_MERCHANT_APIS = 'MERCHANT_APIS';
    const TYPE_PUBLIC_APIS = 'PUBLIC_APIS';

    private $partnerKey;

    public function __construct(string $partnerKey)
    {
        $this->partnerKey = $partnerKey;
    }

    /**
     * @param string $string
     * @param $url
     * @return string
     */
    public function generateSignature(string $string, $url = null): string
    {
        if ($url) {
            $string = $url . '|' . $string;
        }

        return hash_hmac('sha256', $string, $this->partnerKey);
    }

    /**
     * @param array $data
     * @param $type
     * @return $this|string
     */
    public function signBaseString(array $data, string $type): string
    {
        if ($type === self::TYPE_SHOP_APIS) {
            return $this->signBaseStringShopApis($data);
        }
        if ($type === self::TYPE_MERCHANT_APIS) {
            return $this->signBaseStringMerchantApis($data);
        }
        if ($type === self::TYPE_PUBLIC_APIS) {
            return $this->signBaseStringPublicApis($data);
        }
        return '';
    }

    /**
     * @param array $data
     * @return string
     */
    protected function signBaseStringShopApis(array $data)
    {
        //partner_id, api path, timestamp, access_token, shop_id
        return $data['partner_id'] . $data['api_path'] . $data['timestamp'] . $data['access_token'] . $data['shop_id'];
    }

    /**
     * @param array $data
     * @return string
     */
    protected function signBaseStringMerchantApis(array $data)
    {
        //partner_id, api path, timestamp, access_token, merchant_id
        return $data['partner_id'] . $data['api_path'] . $data['timestamp'] . $data['access_token'] . $data['merchant_id'];
    }

    /**
     * @param array $data
     * @return string
     */
    protected function signBaseStringPublicApis(array $data)
    {
        //partner_id, api path, timestamp
        return $data['partner_id'] . $data['api_path'] . $data['timestamp'];
    }
}
