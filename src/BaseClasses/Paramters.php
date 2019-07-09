<?php
namespace Lotiger\BaseClasses;

class Paramters
{
    protected $_dynamicArray;
 
    public function __set($name, $value) {
        $this->_dynamicArray[$name] = $value;
    }
 
    public function getAllVars() {
        return get_class_vars(__CLASS__);
    }
 
    public function getDynamicArray(){
        return $this->_dynamicArray;
    }
}