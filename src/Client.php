<?php

namespace TwitterSDK;


class Client
{
    public function get($method, $requestData)
    {
        $request = $this->getRequest('get_' . $method);
    }

    public function getRequest($str)
    {
        $requestName = preg_split('/[_|\/]/', $str);
        var_dump($requestName);
    }
}