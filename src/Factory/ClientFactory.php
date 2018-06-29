<?php

namespace TwitterSDK\Factory;

use TwitterSDK\Client;

class ClientFactory
{
    /**
     * @return Client
     */
    static function createClient()
    {
        $requestFactory = new RequestFactory();

        return new Client($requestFactory);
    }
}