<?php

namespace TwitterSDK\Factory;

use Curl\Curl;
use TwitterSDK\Client;
use TwitterSDK\Transport\CurlTransport;

class ClientFactory
{
    /**
     * @param $settings
     * @return Client
     * @throws \ErrorException
     */
    static function createClient($settings)
    {
        $requestFactory = new RequestFactory();
        $curl = new Curl();
        $transport = new CurlTransport($curl);

        return new Client($requestFactory, $transport, $settings);
    }
}