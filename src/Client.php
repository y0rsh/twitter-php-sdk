<?php

namespace TwitterSDK;


class Client
{
    public function get($method, $requestData)
    {
        $request = $this->getRequest($method, $requestData);
    }

    public function getRequest($str, $requestData)
    {
        $namespaceParts = explode('/', $str);
        $classNameStr = array_pop($namespaceParts);
        if (count($namespaceParts)) {
            $namespace = implode('\\', array_map(function($word) {return ucfirst($word);}, $namespaceParts)) . '\\';
        }
        $classNameParts = explode('_', $classNameStr);


        $requestClassName = '\\TwitterSDK\\Request\\' . $namespace . implode('', array_map(function($word) {return ucfirst($word);}, $classNameParts)) . 'Request';

        return new $requestClassName($requestData);
    }
}