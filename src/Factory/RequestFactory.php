<?php

namespace TwitterSDK\Factory;


class RequestFactory
{
    public function createRequest($str, $requestData)
    {
        $namespaceParts = explode('/', $str);
        $classNameStr = array_pop($namespaceParts);
        $namespace = '';

        if (count($namespaceParts)) {
            $namespace = implode('\\', array_map(function($word) {return ucfirst($word);}, $namespaceParts)) . '\\';
        }

        $classNameParts = explode('_', $classNameStr);
        $requestClassName = '\\TwitterSDK\\Request\\' . $namespace . implode('', array_map(function($word) {return ucfirst($word);}, $classNameParts)) . 'Request';

        return new $requestClassName($requestData);
    }
}