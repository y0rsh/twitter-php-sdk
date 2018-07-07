<?php

namespace TwitterSDK\Request\Oauth2;


use Symfony\Component\OptionsResolver\OptionsResolver;
use TwitterSDK\Request\RequestInterface;

class TokenRequest implements RequestInterface
{
    protected $url = 'https://api.twitter.com/oauth2/token';
    protected $parameters;
    protected $isAuthNeeded;
    protected $headers;
    public function __construct($requestData)
    {
        $this->parameters = $this->getResolver()->resolve($requestData);
        $this->headers['Authorization'] = 'Basic ' . base64_encode($this->parameters['config']['consumer_key'] . ':' . $this->parameters['config']['consumer_secret']);
    }
    protected function getResolver()
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined(['config']);

        return $resolver;
    }
    public function getUrl()
    {
        return $this->url;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}