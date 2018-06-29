<?php

namespace TwitterSDK\Request\Statuses;


use Symfony\Component\OptionsResolver\Exception\MissingOptionsException;
use Symfony\Component\OptionsResolver\Options;
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
        $resolver->setDefined('id');
        $resolver->setNormalizer('screen_name', function (Options $options) {
            if (!(isset($options['screen_name']) || isset($options['id']))) {
                throw new MissingOptionsException('wtf');
            }

            return $options['screen_name'];
        });
        return $resolver;
    }
}