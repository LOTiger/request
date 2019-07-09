<?php
namespace Lotiger\BaseClasses;

class Paramter
{
    public $key;
    public $value;

    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }

    public function key()
    {
        return $this->value;
    }
}