<?php

namespace TwitterSDK\Error;

class Error
{

    protected $code;
    protected $message;
    public function __construct(int $code, string $message)
    {
        $this->code = $code;
        $this->message = $message;
    }
}