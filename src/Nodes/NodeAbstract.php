<?php

namespace ShopeeV2\Nodes;

use Psr\Http\Message\UriInterface;
use ShopeeV2\Client;
use ShopeeV2\RequestParameters;
use ShopeeV2\RequestParametersInterface;
use ShopeeV2\ResponseData;

abstract class NodeAbstract
{
    /** @var Client */
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string|UriInterface $uri
     * @param array|RequestParameters $parameters
     * @return ResponseData
     */
    public function post($uri, $parameters)
    {
        if ($parameters instanceof RequestParametersInterface) {
            $parameters = $parameters->toArray();
        }

        $request = $this->client->newRequest(Client::METHOD_POST, $uri, [], $parameters);
        $response = $this->client->send($request);

        return new ResponseData($response);
    }

    /**
     * @param $uri
     * @return ResponseData
     */
    public function get($uri, $parameters = [])
    {
        $request = $this->client->newRequest(Client::METHOD_GET, $uri, [], $parameters);
        $response = $this->client->send($request);

        return new ResponseData($response);
    }
}
