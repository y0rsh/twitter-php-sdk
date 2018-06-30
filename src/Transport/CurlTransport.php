<?php

namespace TwitterSDK\Transport;


use Curl\Curl;

class CurlTransport implements TransportInterface
{
    protected $curl;
    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }
}