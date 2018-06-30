<?php

namespace TwitterSDK\Request\Statuses;


use Symfony\Component\OptionsResolver\OptionsResolver;

class UserTimelineRequest
{
    protected $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    protected $parameters;
    public function __construct($requestData)
    {
        $this->parameters = $this->getResolver()->resolve($requestData);
    }
    protected function getResolver()
    {
        $resolver = new OptionsResolver();
        $resolver->setDefined(['screen_name', 'user_id', 'since_id', 'count', 'max_id', 'trim_user', 'exclude_replies', 'include_rts']);
        $resolver->setAllowedTypes('screen_name', 'string');

        return $resolver;
    }
    public function getUrl()
    {
        return $this->url;
    }
}