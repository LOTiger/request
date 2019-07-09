<?php
namespace Lotiger\BaseClasses;
use Lotiger\BaseClasses\RequestCommon;
use Lotiger\BaseClasses\Paramters;

class Post extends RequestCommon
{
    public function __construct(Array $paramters)
    {
        $this->paramters = new Paramters();
        $this->generateParamters($paramters);
    }

    public function get(String $key)
    {
        if (!$this->paramters->getOneVar($key)) {
           throw new Exception("Type of Post Paramter {$key} does not exist", 10001);
        }

        return $this->paramters->getOneVar($key)->value;
    }
}