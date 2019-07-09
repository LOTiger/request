<?php
namespace Lotiger\BaseClasses;

class Paramters
{
    protected $_dynamicArray;
 
    public function __set($key, $value)
    {
        $this->_dynamicArray[$key] = $value;
    }

    public function getOneVar(String $key)
    {
        return $this->_dynamicArray[$key] ?? null;
    }
 
    public function getAllVars()
    {
        return get_class_vars(__CLASS__);
    }
 
    public function getDynamicArray()
    {
        return $this->_dynamicArray;
    }
}