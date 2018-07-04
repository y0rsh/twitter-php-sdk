<?php

namespace TwitterSDK\Response;


use TwitterSDK\Error\Error;

class Response
{
    protected $errors = [];
    public function addError(Error $error)
    {
        $this->errors[] = $error;
    }
}