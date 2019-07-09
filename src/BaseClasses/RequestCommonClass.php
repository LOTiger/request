<?php
namespace Lotiger\BaseClasses;

abstract class RequestCommon
{
    protected $paramters;

    public abstract function get(String $key);

    public function all()
    {
        $datas = array();
        if (empty($this->paramters)) {
            return $datas;
        }

        foreach($this->paramters as $paramter) {
            $datas[$paramter->key] = $paramter->value;
        }

        return $datas;
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