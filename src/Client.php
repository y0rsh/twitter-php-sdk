<?php

namespace TwitterSDK;


class Client
{
    public function get($method, $requestData)
    {
        $request = $this->getRequest('get_' . $method, $requestData);
    }

    public function getRequest($str, $requestData)
    {
        $parts = preg_split('/[_|\/]/', $str);

        $requestClassName = '\\TwitterSDK\\Request\\' . implode('', array_map(function($word) {return ucfirst($word);}, $parts)) . 'Request';

        return new $requestClassName($requestData);
    }
}