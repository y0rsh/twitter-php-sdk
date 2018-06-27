<?php

namespace TwitterSDK\Request\Statuses;


use Symfony\Component\OptionsResolver\OptionsResolver;

class UserTimelineRequest
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