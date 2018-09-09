<?php

namespace TwitterSDK;


use TwitterSDK\Error\Error;
use TwitterSDK\Factory\RequestFactory;
use TwitterSDK\Response\Response;
use TwitterSDK\Transport\TransportInterface;

class Client
{
    protected $requestFactory;
    protected $transport;
    protected $settings;
    public function __construct(RequestFactory $requestFactory, TransportInterface $transport, $settings)
    {
        $this->requestFactory = $requestFactory;
        $this->transport = $transport;
        $this->settings = $settings;
    }

    public function get($method, $requestData)
    {
        $request = $this->requestFactory->createRequest($method, $requestData);
        $response = $this->transport->sendRequest($request);

        return $this->processResponse($response);
    }

    public function post($method, $requestData)
    {
        $request = $this->requestFactory->createRequest($method, $requestData);
        dump($request);
        $response = $this->transport->sendPostRequest($request);

        return $this->processResponse($response);
    }

    public function processResponse($response)
    {
        $responseData = json_decode($response, JSON_OBJECT_AS_ARRAY);
        $response = new Response();
        if (isset($responseData['errors'])) {
            foreach ($responseData['errors'] as $errorData) {
                $error = new Error($errorData['code'], $errorData['message']);
                $response->addError($error);
            }
        }
        dump($response);
    }
}