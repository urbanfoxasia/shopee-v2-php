<?php

namespace ShopeeV2;

use Psr\Http\Message\ResponseInterface;

/**
 * Class FileResponseData
 *
 * @package ShopeeV2
 */
class FileResponseData
{
    /** @var ResponseInterface */
    private $response;

    /** @var array */
    private $data;

    /**
     * FileResponseData constructor
     *
     * @param  ResponseInterface  $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->data = $response->getBody()->getContents();
        $this->response = $response;
    }

    /**
     * Get request response
     *
     * @return ResponseInterface
     */
    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    /**
     * @return array[]
     */
    public function getData(): array
    {
        return ['content' => $this->data];
    }
}
