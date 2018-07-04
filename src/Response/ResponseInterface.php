<?php

namespace TwitterSDK\Response;


use TwitterSDK\Error\Error;

interface ResponseInterface
{
    public function addError(Error $error);
}