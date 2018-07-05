<?php

namespace TwitterSDK\Transport;


use Curl\Curl;
use TwitterSDK\Request\RequestInterface;

class CurlTransport implements TransportInterface
{
    protected $curl;
    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function sendRequest(RequestInterface $request)
    {
        $this->curl->get($request->getUrl());

        return $this->curl->response;
    }

    public function sendPostRequest(RequestInterface $request)
    {
        $this->curl->post($request->getUrl());

        return $this->curl->response;
    }
}