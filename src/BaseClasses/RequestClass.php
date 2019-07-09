<?php
namespace Lotiger\BaseClasses;
use Lotiger\Contracts\RequestHas;
use Lotiger\BaseClasses\RequestCommon;

class Request extends RequestCommon implements RequestHas
{
    public function __construct(Array $paramters)
    {
        $this->generateParamters($paramters);
    }

    public function get(String $key)
    {
        if (!isset($this->paramters->$key)) {
           throw new Exception("Type of Request Paramter {$key} does not exist", 10001);
        }

        return $this->paramters->$key->value;
    }
}