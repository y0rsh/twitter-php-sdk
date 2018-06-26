<?php

namespace TwitterSDK\Request;


use Symfony\Component\OptionsResolver\OptionsResolver;

class GetStatusesUserTimelineRequest
{
    protected $parameters;
    public function __construct($requestData)
    {
        $this->parameters = $this->getResolver()->resolve($requestData);
    }
    protected function getResolver()
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined('screen_name');
        return $resolver;
    }
}