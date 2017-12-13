<?php namespace Pckg\Pendo\Api;

use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;
use Pckg\Pendo\Api\Endpoint\Company;
use Pckg\Pendo\Api\Endpoint\Device;
use Pckg\Pendo\Api\Endpoint\Invoice;

/**
 * Class Api
 *
 * @package Pckg\Pendo\Api
 */
class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct($endpoint, $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Impero-Api-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 5,
        ];
    }

    /**
     * @return Company
     */
    public function company()
    {
        return new Company($this);
    }

    /**
     * @return Device
     */
    public function device()
    {
        return new Device($this);
    }

    /**
     * @return Invoice
     */
    public function invoice()
    {
        return new Invoice($this);
    }

}