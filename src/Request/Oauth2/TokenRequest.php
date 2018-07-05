<?php

namespace TwitterSDK\Request\Oauth2;


use Symfony\Component\OptionsResolver\OptionsResolver;
use TwitterSDK\Request\RequestInterface;

class TokenRequest implements RequestInterface
{
    protected $url = 'https://api.twitter.com/oauth2/token';
    protected $parameters;
    protected $isAuthNeeded;
    public function __construct($requestData)
    {
        $this->parameters = $this->getResolver()->resolve($requestData);
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
}