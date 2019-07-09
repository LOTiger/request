<?php
namespace Lotiger\BaseClasses;
use Lotiger\Contracts\RequestHas;

abstract class RequestCommon implements RequestHas
{
    protected $paramters;

    public function get(String $key){}

    public function all()
    {
        return $this->paramters;
    }

    protected function generateParamters(Array $paramters)
    {
        if (empty($paramters)) {
            return;
        }

        foreach($paramters as $key => $value) {
            $this->paramters->$key = new Paramter($key, $value);
        }
    }
}