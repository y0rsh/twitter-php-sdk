<?php

namespace TwitterSDK;


use TwitterSDK\Factory\RequestFactory;

class Client
{
    protected $requestFactory;
    public function __construct(RequestFactory $requestFactory)
    {
        $this->requestFactory = $requestFactory;
    }

    public function get($method, $requestData)
    {
        $request = $this->requestFactory->createRequest($method, $requestData);
        dump($request);
    }
}