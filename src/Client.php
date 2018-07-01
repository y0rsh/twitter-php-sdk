<?php

namespace TwitterSDK;


use TwitterSDK\Factory\RequestFactory;
use TwitterSDK\Response\Response;
use TwitterSDK\Transport\TransportInterface;

class Client
{
    protected $requestFactory;
    protected $transport;
    public function __construct(RequestFactory $requestFactory, TransportInterface $transport)
    {
        $this->requestFactory = $requestFactory;
        $this->transport = $transport;
    }

    public function get($method, $requestData)
    {
        $request = $this->requestFactory->createRequest($method, $requestData);
        $response = $this->transport->sendRequest($request);

        return $this->processResponse($response);
    }

    public function processResponse($response)
    {
        $responseData = json_decode($response);
        $response = new Response();
        if (isset($responseData['errors'])) {
            foreach ($responseData['errors'] as $errorData) {
                $error = new Error($errorData['code'], $errorData['message']);
                $response->addError($error);
            }
        }
    }
}